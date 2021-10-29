<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('layouts.login');
    }
    public function login(Request $request)
    {
        # code...
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withErrors(['invalid'=>'Tài Khoản hoặc mật khẩu không đúng']);
        }
    }
    public function logOut()
    {
        # code...
        Auth::logout();
        return redirect()->route('home');
    }
}
