<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ADMIN|SETTING_MANAGEMENT', ['only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = Notification::with("customer")->paginate(15);
        return view('admin2.notifications.index',compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = customer::all();
        return view('admin2.notifications.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'users' => 'required',
            'title' => 'required',
            'details' => 'required',
        ]);

        if (in_array('all', $request['users'])) {
            $firebaseTokens = Customer::whereNotNull('fcm')->pluck('fcm')->all();
            send_notification(new \App\Models\Customer(), $request['title'], $request['details'], $request['details'], $firebaseTokens);
            Notification::create(
                [
                    "title" => $request['title'],
                    "details" => $request['details'],
                    "type" => 'GENERAL',
                ]
            );
        } else {
            $customer = Customer::whereIn('id', $request['users'])->get();
            $customer = $customer->whereNotNull('fcm')->pluck('fcm');
            $Ids = Customer::whereIn('id', $request['users'])->get();
            $Ids = $Ids->pluck('id');
            store_collection_notification($customer, $Ids,  $request['title'], $request['details'], $request['details'], "GENERAL");
        }
        return redirect()->route('notifications.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\notification $notification
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\notification $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\notification $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\notification $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        //
    }
}
