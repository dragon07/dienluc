<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('admin.quan-tri.index');
    }
}
