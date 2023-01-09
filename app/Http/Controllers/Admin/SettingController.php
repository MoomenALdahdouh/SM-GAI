<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use function Composer\Autoload\includeFile;

class SettingController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ADMIN|CONTENT_MANAGEMENT', ['only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::where("type", 'TERMS_USE')->first();
        return view('admin2.settings.create', compact('setting'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SettingRequest $request)
    {
        $setting = Setting::where("type", 'TERMS_USE')->first();

        $data = $request->validated();

        $data['details'] = [
            'en' => $data['details_ar'],
            'ar' => $data['details_ar']
        ];
        $data['type'] = 'TERMS_USE';

        if ($setting) {
            $setting->update($data);
        } else
            $setting = Setting ::create($data);
        toastr()->success(trans('message.successCreate'));

        return redirect()->route('terms-conditions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\setting $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\setting $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting  $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\setting $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting  $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\setting $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting  $setting)
    {
        //
    }
}
