<?php

namespace App\Http\Controllers\Admin;

use App\Facades\ImageFacade;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {

    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|\Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Role $role
     * @return void
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'nullable',
            'confirm-password' => 'nullable:password|same:password|min:6'
        ]);

        $user = \Illuminate\Support\Facades\Auth::user();

        $user->name = $request->input('name');

        $users = User::where('email', $request->input('email'))->first();
        if ($users == null && $request->input('email') != null && $request->input('email') != $user->email) {
            $user->email = $request->input('email');

        }

        if ($request['password'] != null) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->save();
        toastr(trans('message.successUpdate'), 'success');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     * @throws ValidationException
     */


}
