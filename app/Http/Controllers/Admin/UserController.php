<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ADMIN', ['only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::all();

        return view('admin2.users.index', compact('roles', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin2.users.create', compact('permissions'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|unique:users,email',
            'role' => 'required',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'email_verified_at' => now(),
            'password' => Hash::make($request->input('password')), // 123456
            'remember_token' => Str::random(10),
        ]);

        $permission = Permission::find($request->input('role'));

        $role = Role::where('name', $permission->name)->first();

        if ($role == null) {

            $role = Role::create(['name' => $permission->name]);
            $role->syncPermissions($permission);
        }
        $user->assignRole($role->id);


        return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param Role $role
     * @return void
     */
    public function showPersonalInfo()
    {
        return view('admin2.Profile.PersonalInformation.index');
    }

    public function showChangePassword()
    {
        return view('admin2.Profile.ChangePassword.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Role $role
     * @return void
     */
    public function edit(User $user)
    {
        $permissions = Permission::all();
        return view('admin2.users.edit', compact('user', 'permissions'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'nullable|unique:users,email',
            'role' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->input('name');
        if ($request->input('email') != null && $request->input('email') != $user->email) {
            $user->email = $request->input('email');

        }

        if ($request['password'] != null) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->save();
        $user->roles()->detach();

        $permission = Permission::find($request->input('role'));

        $role = Role::where('name', $permission->name)->first();

        if ($role == null) {

            $role = Role::create(['name' => $permission->name]);
            $role->syncPermissions($permission);
        }
        $user->assignRole($role->id);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

}
