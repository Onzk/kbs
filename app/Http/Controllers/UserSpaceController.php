<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserSpaceController extends Controller
{
    public function index()
    {
        return view('user-space.index');
    }

    public function login()
    {
        return view('user-space.auth-login');
    }
    public function forgot_password()
    {
        return view('user-space.auth-forgot-password');
    }
}
