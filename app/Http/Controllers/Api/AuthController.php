<?php

namespace App\Http\Controllers\Api;

use App\Facades\ImageFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\DriverRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Resources\CityResource;
use App\Http\Resources\CustomerResource;
use App\Models\City;
use App\Models\Customer;
use App\Models\InformationDriver;
use App\Models\User;
use App\Models\Vehicle;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Throwable;

class AuthController extends Controller
{

    public function cities(Request $request)
    {
        App::setLocale($request->header("lang") ?? "en");
        $cities = City::all();
        return custom_response(true, 'register Success', CityResource::collection($cities), 200);
    }

    public function register(CustomerRequest $request)
    {
        App::setLocale($request->header("lang") ?? "en");

        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $data['status'] = 'ACCEPTED';
        $data['type'] = 'CUSTOMER';
        $user = Customer::create($data);
        $token = $user->createToken('auth');

        return custom_response(true, 'register Success', ['token' => $token->plainTextToken,
            'user' => new CustomerResource($user)], 200);
    }

    public function driver_register(DriverRequest $request)
    {

        App::setLocale($request->header("lang") ?? "en");

        $data = $request->validated();
        $image = ImageFacade::uploadImage($data['image']);
        $data['image'] = $image['image'];
        $data['driver_id_image'] = $image['image'];

        $image = ImageFacade::uploadImage($data['technical_inspection_image']);
        $data['technical_inspection_image'] = $image['image'];

        $image = ImageFacade::uploadImage($data['vehicles_driving_license_image']);
        $data['vehicles_driving_license_image'] = $image['image'];

        $image = ImageFacade::uploadImage($data['certificate_precedents_Image']);
        $data['certificate_precedents_Image'] = $image['image'];

        $image = ImageFacade::uploadImage($data['driving_license_image']);
        $data['driving_license_image'] = $image['image'];

        $image = ImageFacade::uploadImage($data['insurance_image']);
        $data['insurance_image'] = $image['image'];

        $image = ImageFacade::uploadImage($data['card_employment_image']);
        $data['card_employment_image'] = $image['image'];

        if ($data["commissioner_image"]) {
            $image = ImageFacade::uploadImage($data['commissioner_image']);
            $data['commissioner_image'] = $image['image'];
        }

        $data["is_commissioner"] = $data["commissioner_image"] != null;

        $data["type"] = 'DRIVER';
        $data['password'] = Hash::make($data['password']);
        $data['status'] = 'PENDING';
        $customer = Customer::create($data);
        $data["customer_id"] = $customer->id;
        $inoframtion = InformationDriver::create($data);
        $vehicle = Vehicle::create($data);
        $token = $customer->createToken('auth');
        return custom_response(true, 'register Success', ['token' => $token->plainTextToken,
            'user' => new CustomerResource($customer)], 200);

    }


    public function login(LoginRequest $request)
    {

        App::setLocale($request->header("lang") ?? "en");

        $data = $request->validated();

        $user = Customer::where('email', $data['email'])->first();

        if (!$data['fcm']) {
            return custom_response(false, 'you must send fcm', null, 401);
        }
        if (!$user || !Hash::check($data['password'], $user->password)) {
            return custom_response(false, 'Invalid username and password combination', null, 401);
        }
        $token = $user->createToken('auth');
        $user->update([
            "fcm" => $data['fcm']
        ]);
        return custom_response(true, 'login Success', ['token' => $token->plainTextToken,
            'user' => new CustomerResource($user)], 200);
    }


    public function profile(Request $request)
    {
        $user = Auth::user();
        return custom_response(true, 'Profile ', new CustomerResource($user), 200);
    }


    public function logout()
    {
        $user = Auth::guard('sanctum')->user();
        $user->currentAccessToken()->delete();

        return custom_response(true, 'success logut', [], 200);
    }


    public function update_profile(Request $request)
    {
        $user = Auth::user();
        $newUser = $user;

        if ($request["name"]) {
            $newUser->name = $request["name"];
        }

        if (isset($request["email"]) && $request["email"]) {
            if (!$this->isValidEmail($request["email"])) {
                return custom_response(true, "The given data was invalid.",
                    ["errors" => [
                        "email" => ["The email must be a valid email address."]]], 401);
            }
            $email = Customer::where('email', $request["email"])->first();
            if ($email && $user->email != $email->email) {
                return custom_response(true, "The given data was invalid.",
                    ["errors" => [
                        "email" => ["The email has already been taken."]]], 401);
            }
            $newUser->email = $request["email"];
        }

        if ($request["image"]) {
            $image = ImageFacade::uploadImage($request['image']);
            $newUser->image = $image["image"];
        }

        $newUser->save();
        if ($request["phone_number"]) {
            if (!$this->validate_mobile($request["phone_number"])) {
                return custom_response(true, "The given data was invalid.",
                    ["errors" => [
                        "phone_number" => ["The email must be a valid phone number."]]], 401);
            }
            $phone = Customer::where('phone_number', $request["phone_number"])->first();
            if ($phone && $user->phone_number != $phone->phone_number) {
                return custom_response(true, "The given data was invalid.",
                    ["errors" => [
                        "phone_number" => ["The phone number has already been taken."]]], 401);
            }
            $newUser->phone_number = $request["phone_number"];

//            $users = Auth::guard('sanctum')->user();
//            $users->currentAccessToken()->delete();
        }

        $newUser->save();

        return custom_response(true, 'Profile ', new CustomerResource($newUser), 200);
    }

    function validate_mobile($mobile)
    {
        return preg_match('/^[0-9]+$/', $mobile);
    }

    function isValidEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function update_password(ResetPasswordRequest $request)
    {
        $data = $request->validated();
        $new_password = Hash::make($data['new_password']);
        $user = Auth::user();

        if (Hash::check($data['old_password'], $user->password)) {
            if (!Hash::check($new_password, $user->password)) {
                $user->update([
                    'password' => $new_password,
                ]);
                $token = $user->createToken('auth');
                return custom_response(true, 'Success reset', ['token' => $token->plainTextToken,
                    'user' => new CustomerResource($user)], 200);
            } else {

                return custom_response(false, 'new password can not be the old password!', null, 401);
            }
        } else {
            return custom_response(false, 'old password doesnt matched', null, 401);
        }

    }


    public function forget_password(Request $request)
    {

        if ($request->phone_number == null)
            return custom_response(false, 'send your phone number please', null, 401);

        $user = Customer::where('phone_number', $request->phone_number)->first();


        if (!$user) {
            return custom_response(true, 'not found user for this number', null, 401);
        }
        $code = mt_rand(100000, 999999);

        $response = Http::get('https://REST.GATEWAY.SA/api/SendSMS', [
            'api_id' => 'API26134872605',
            'api_password' => 'password@123',
            'sms_type' => 'T',
            'encoding' => 'T',
            'sender_id' => 'Gateway.sa',
            'phonenumber' => $request->phone_number,
            'textmessage' => $code
        ]);
//
        $json_decode = json_decode($response->body(), true);
//
//
        if ($json_decode['status'] != "S")
            return custom_response(true, 'Something Happened', []);


        $user->update([
            'verify_code' => $code
        ]);
        return custom_response(true, 'reset password', [
            'verify_code' => $code,
        ]);

    }

    public function check_code(Request $request)
    {


        if ($request->phone_number == null)
            return custom_response(false, 'send your phone number please', null, 401);
        if ($request->verify_code == null)
            return custom_response(false, 'send your verify code number please', null, 401);


        $user = Customer::where('phone_number', $request->phone_number)->first();
        $newDateTime = Carbon::now()->subMinutes(4);
        if ($user->updated_at != null && ($user->updated_at >= $newDateTime)) {
            if ($user->verify_code == $request->verify_code) {
                $token = $user->createToken('auth');
                return custom_response(true, 'verify Code done', ['token' => $token->plainTextToken,
                ], 200);
            } else {
                return custom_response(false, 'not verify Code ', null, 401);
            }
        } else {
            return custom_response(false, 'your code is expired', null, 401);
        }
    }

    public function reset_password(Request $request)
    {

        $user = Auth::user();
        $this->validate($request, [
            "new_password" => "required",
        ]);
        $new_password = Hash::make($request['new_password']);
        $user->update([
            'password' => $new_password,
        ]);
        $user->currentAccessToken()->delete();

        return custom_response(true, 'Success reset', "rest password successfully", 200);
    }

}
