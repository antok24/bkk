<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function proseslogin(Request $request)
    {
        dd($request->all());
        return view('auth.login');
    }
}
