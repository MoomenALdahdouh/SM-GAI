<?php

namespace App\Http\Controllers\Admin;

use App\Facades\ImageFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\DriverRequest;
use App\Models\City;
use App\Models\Customer;
use App\Models\InformationDriver;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use function view;

class CustomerController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:ADMIN|SM_GAI_EMPLOYEE', ['only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $type_data = str_contains(Route::current()->getName(), 'customers')
            ? 'CUSTOMER' : 'DRIVER';
        $customers = Customer::where('type', $type_data)->paginate(15);
        return view('admin2.customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view("admin2.customers.create", compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DriverRequest $request)
    {

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

        $customer = Customer::create($data);
        $data["customer_id"] = $customer->id;
        $inoframtion = InformationDriver::create($data);
        $vehicle = Vehicle::create($data);

        toastr()->success(trans('message.successCreate'));


        return redirect()->route('drivers.index');


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\customer $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer,$id)
    {
        $customer = Customer::with('information_driver')->with('city')->with('vehicle')->find($id);
        return view('admin2.customers.details',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\customer $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer, $id)
    {
        $customer = Customer::find($id);
        $cities = City::all();
        return view("admin2.customers.edit", compact('cities', 'customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer = Customer::find($request["id"]);
        $customer->status = $request['type'];
        $update = $customer->update();
        return redirect()->back();

    }

    public function restore($id){
        Customer::withTrashed()->find($id)->restore();
            return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\customer $customer
     * @return \Illuminate\Http\Response
     */

    public function delete()
    {
        $type_data = str_contains(Route::current()->getName(), 'customers')
            ? 'CUSTOMER' : 'DRIVER';
        $customers = Customer::onlyTrashed()->where('type', $type_data)->paginate(15);
        return view('admin2.customers.deleted',compact('customers'));
    }

    public function destroy(Request $request)
    {
        $customer = Customer::find($request["id"]);
        $isDeleted = $customer->delete();
        toastr()->success("تم الحدف بنجاح");
        return redirect()->route(str_contains(Route::current()->getName(), 'drivers') ? 'drivers.index' : 'customers.index');
    }
}
