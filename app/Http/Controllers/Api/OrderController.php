<?php

namespace App\Http\Controllers\Api;

use App\Facades\ImageFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\ComplaintRequest;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\SendOrderRequest;
use App\Http\Resources\ComplaintResource;
use App\Http\Resources\CustomerResource;
use App\Http\Resources\OrderResource;
use App\Models\Address;
use App\Models\Complaint;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderRequests;
use App\Models\Ratings;
use App\Models\Tax;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Throwable;

class OrderController extends Controller
{

    static $_TYPE = 'CUSTOMER';

    public function index(Request $request)
    {
        App::setLocale($request->header("lang") ?? "en");
        $user = Auth::user();
        $orders = Order::with('type');


        if ($user->type == 'DRIVER') {
            if (isset($request['status']) && $request['status'] == 'IN_PROGRESS') {
                $orders = $orders->where('status', 'IN_PROGRESS')->where('driver_id', $user->id);
            } else if (isset($request['status']) && $request['status'] == 'FINISHED') {
                $orders = $orders->where('status', 'FINISHED')->where('driver_id', $user->id);
            } else {
                $orders = $orders->where("status", 'PENDING');
            }
            if (isset($request['from_city_id']) && $request['from_city_id'] != null) {
                $orders = $orders->whereHas('from_address', function ($query) use ($request) {
                    return $query->where('city_id', $request['from_city_id']);
                })->where("status", 'PENDING');
            }
            if (isset($request['to_city_id']) && $request['to_city_id'] != null) {
                $orders = $orders->whereHas('to_address', function ($query) use ($request) {
                    return $query->where('city_id', $request['to_city_id']);
                })->where("status", 'PENDING');
            }
            if (isset($request['date']) && $request['date'] != null) {
                $orders = $orders->whereBetween('created_at', [$request['date'] . ' 00:00:00', $request['date'] . ' 23:59:59'])->where("status", 'PENDING');
            }
            $orders = $orders->with('customer')->get();
        } else {
            $orders = $orders->with('order_request.driver')
//                ->with('driver')
//                ->with('driver.ratting')
//                ->with('driver.city')
                ->with('order_request_accept')
                ->with('order_request_accept.driver')
                ->where("customer_id", $user->id)
                ->where("status", $request['status'])->get();

        }
        OrderController::$_TYPE = $user->type;

        return custom_response(true, 'Success', OrderResource::collection($orders));
    }

    public
    function store(OrderRequest $request)
    {
        $data = $request->validated();


        $from = $this->create_address($data['latitude_from'], $data['longitude_from'], $data['region_from'], $data['city_id_from']);
        $to = $this->create_address($data['latitude_to'], $data['longitude_to'], $data['region_to'], $data["city_id_to"]);


        $user = Auth::user();
        $data["status"] = 'PENDING';
        $data["customer_id"] = $user->id;
        $data['from_id'] = $from->id;
        $data['to_id'] = $to->id;
        $order = Order::create($data);
        return custom_response(true, 'success', new OrderResource($order));
    }

    public
    function create_address($latitude, $longitude, $region, $city_id)
    {
        return Address::create(
            [
                "latitude" => $latitude,
                "longitude" => $longitude,
                "region" => $region,
                "city_id" => $city_id,
            ]
        );
    }

    public
    function send_order_request(SendOrderRequest $request)
    {
        App::setLocale($request->header("lang") ?? "en");
        $user = Auth::user();
        if ($user->type != 'DRIVER') {
            return custom_response(false, "Must your account be driver", null, 401);
        }
//        if (!isset($request['order_id']) || $request['order_id'] == null)
//            return custom_response(true, 'send order request', "you mast send order id", 401);
//
//        if (!isset($request['order_id']) || $request['order_id'] == null)
//            return custom_response(true, 'send order request', "you mast send order id", 401);


        $order = Order::find($request['order_id']);
        if ($order == null || $order->status != 'PENDING') {
            return custom_response(false, "this Order isn't available", null, 401);
        }
        $order_request = OrderRequests::where('order_id', $request['order_id'])->where('driver_id', $user->id)->first();
        if ($order_request != null)
            return custom_response(false, "you already send a request", null, 401);

        $data["status"] = 'IN_PROGRESS';
        $order->driver_id = $user->id;
        return custom_response(true, 'send order request success', OrderRequests::create([
            'driver_id' => $user->id,
            'order_id' => $request['order_id'],
            'price' => $request['price'],
            'tax' => json_encode(Tax::all()),
        ]), 200);

    }

    public
    function accept_driver(Request $request)
    {
        App::setLocale($request->header("lang") ?? "en");
        $user = Auth::user();
        if ($user->type == 'DRIVER') {
            return custom_response(true, 'accept driver', "Must your account be customer", 401);
        }
        if (!isset($request['order_id']) || $request['order_id'] == null
            || !isset($request['order_request_id']) || $request['order_request_id'] == null)
            return custom_response(true, 'accept driver', "you mast send order id and order request id", 401);

        $order = Order::with('driver')
            ->with('type')

            ->where("customer_id", $user->id)->find($request['order_id']);
        if ($order == null || $order->status != 'PENDING') {
            return custom_response(true, 'send order request', "this Order isn't available", 401);
        }
//        $order->driver_id = $request['driver_id'];
        $order->order_request_id = $request['order_request_id'];
        $order->status = 'IN_PROGRESS';
        $order->update();

        $order = Order::with('driver')
            ->with('type')
            ->with('order_request_accept')
            ->with('order_request_accept.driver')
            ->where("customer_id", $user->id)->find($request['order_id']);

        return custom_response(true, 'success', new OrderResource($order));

    }


    public
    function finish_order(Request $request)
    {
        App::setLocale($request->header("lang") ?? "en");
        $user = Auth::user();
        if ($user->type == 'DRIVER') {
            return custom_response(true, 'finish order', "Must your account be customer", 401);
        }

        if (!isset($request['order_id']) || $request['order_id'] == null
            || !isset($request['ratting']) || $request['ratting'] == null)
            return custom_response(true, 'finish order', "you mast send order id and ratting for driver", 401);

        $order = Order::with('driver')
            ->with('type')
            ->with('order_request_accept')
            ->with('order_request_accept.driver')
            ->where("customer_id", $user->id)->find($request['order_id']);
        if ($order == null || ($order->status != 'PENDING' && $order->status == 'FINISHED')) {
            return custom_response(true, 'send order request', "this Order isn't available", 401);
        }
//        dd($order->order_request_accept->driver->id);
        $rating = Ratings::create([
            'customer_id' => $user->id,
            'driver_id' => $order->order_request_accept->driver->id,
            'order_id' => $order->id,
            'rating_value' => $request['ratting'],
        ]);


        $order->status = 'FINISHED';
        $order->update();

        return custom_response(true, 'finish order success', $rating, 401);
    }

    public
    function cancel_driver(Request $request)
    {
        App::setLocale($request->header("lang") ?? "en");
        $user = Auth::user();
        if ($user->type == 'DRIVER') {
            return custom_response(true, 'accept driver', "Must your account be customer", 401);
        }
        if (!isset($request['order_id']) || $request['order_id'] == null
            || !isset($request['order_request_id']) || $request['order_request_id'] == null)
            return custom_response(true, 'accept driver', "you mast send order id and order request id", 401);

        $order = Order::with('driver')
            ->with('type')
            ->with('order_request_accept')
            ->where("customer_id", $user->id)->find($request['order_id']);
        if ($order == null || $order->status != 'IN_PROGRESS') {
            return custom_response(true, 'send order request', "this Order isn't available", 401);
        }
        $order->driver_id = null;
        $order->order_request_id = null;
        $order->status = 'PENDING';
        $order->update();

        return custom_response(true, 'success', new OrderResource($order));

    }

}
