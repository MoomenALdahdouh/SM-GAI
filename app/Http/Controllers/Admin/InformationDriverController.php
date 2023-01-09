<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\informationDriver;
use Illuminate\Http\Request;

class InformationDriverController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\informationDriver  $information_driver
     * @return \Illuminate\Http\Response
     */
    public function show(informationDriver $information_driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\informationDriver  $information_driver
     * @return \Illuminate\Http\Response
     */
    public function edit(informationDriver $information_driver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\informationDriver  $information_driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, informationDriver $information_driver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\informationDriver  $information_driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(informationDriver $information_driver)
    {
        //
    }
}
