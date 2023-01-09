<?php

namespace App\Http\Controllers\Api;

use App\Facades\ImageFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\ComplaintRequest;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\ComplaintResource;
use App\Http\Resources\CustomerResource;
use App\Models\Complaint;
use App\Models\Customer;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Throwable;

class ComplaintController extends Controller
{

    public function index(){
        $user = Auth::user();
        $complaint = Complaint::where("customer_id", $user->id)->get();
        return custom_response(true, 'Success',ComplaintResource::collection($complaint));
    }

    public function store(ComplaintRequest $request){
        $data = $request->validated();

        $user = Auth::user();
        $data["customer_id"] = $user->id;
        $data["is_reply"] = false;

        $complaint = Complaint::create($data);
        return custom_response(true, 'success',new ComplaintResource($complaint));
    }


    public function terms_conditions(Request $request){

        App::setLocale($request->header("lang") ?? "en");

        $setting = Setting::where("type", 'TERMS_USE')->first();

        return custom_response(true, 'success',[
            'id'=>$setting->id,
            'details'=>$setting->details,
        ]);

    }

}
