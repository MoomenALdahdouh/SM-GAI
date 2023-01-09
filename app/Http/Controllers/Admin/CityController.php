<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Models\City;
use App\Models\customer;
use Illuminate\Http\Request;

class CityController extends Controller
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
        $cities = City::paginate(15);
        return view('admin2.cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin2.cities.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityRequest $request)
    {
        $data = $request->validated();

        $data['name']  = [
            'en' => $data['name_en'],
            'ar' => $data['name_ar']
        ];


        $type = city::create($data);
        toastr()->success(trans('message.successCreate'));

        return redirect()->route('cities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        return view('admin2.cities.edit',compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function update(CityRequest $request, City $city)
    {

        $city= City::find($city->id);
        $data = $request->validated();

        $data['name']  = [
            'en' => $data['name_en'],
            'ar' => $data['name_ar']
        ];


        $update = $city->update($data);
        toastr()->success(trans('message.successCreate'));

        return redirect()->route('cities.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */

    public function destroy(City $city)
    {
        $isDeleted = $city->delete();
        return redirect()->route('cities.index');

    }

    public function delete(){
        $cities = City::onlyTrashed()->paginate(15);
        return view('admin2.cities.deleted',compact('cities'));
    }

    public function restore($id){
        City::withTrashed()->find($id)->restore();
        return redirect()->route('cities.index');
    }
}
