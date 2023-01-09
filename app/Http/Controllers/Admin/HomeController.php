<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use function view;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countCustomers = Customer::where('type', 'CUSTOMER')->count();
        $countDrivers = Customer::where('type', 'DRIVER')->count();
        $countOrders = Order::count();
        $orders = Order::with('customer')->with('type')->where('status','PENDING')->take(10)->get();
        return view('admin2.index', compact('countCustomers', 'countDrivers', 'countOrders', 'orders'));
    }
}
