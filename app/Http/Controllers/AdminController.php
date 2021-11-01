<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function dashboard()
    {
        // dd(Auth::user());
        return view('admin.dashboard');
    }

    // public function login()
    // {
    //     return view('layouts.login');
    // }
    public function roleAndPermission()
    {
        # code...
        return view('admin.quan-tri.role-permision');
    }
    public function listAdmin()
    {
        # code...
        $admins = User::all();
        // dd($admins->first()->roles);
        return view('admin.quan-tri.index',compact('admins'));
    }
    public function edit($id)
    {
        # code...
        $roles = Role::all();
        $user = User::findOrFail($id);
        // dd($user);
        return view('admin.quan-tri.edit',compact('roles','user'));
    }
    public function update(Request $request, $id)
    {
        # code...
        $user = User::findOrFail($id);
        // dd($user, $request->all());
        if($request->email !=null && $request->email != $user->email){
            $request->validate([
                'email'=>'email:rfc,dns|unique:users,email'
            ]);
            $user->email = $request->email;
        }
        $user->name = $request->name;

        if($request->password !=null){
            $request->validate([
                'password'=>'min:6|string'
            ]);
            $user->password = Hash::make($request->password);
        }
        $user->save();
        $user->roles()->detach();
        $user->assignRole($request->role);
        return redirect()->back();
    }
}
