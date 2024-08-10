<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserSpaceController extends Controller
{
    public function __construct(private bool $isExecutive = true){

    }
    public function index()
    {
        $isExecutive = $this->isExecutive;
        return view('user-space.index', compact('isExecutive'));
    }

    public function login()
    {
        return view('user-space.auth-login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('public.home.index'));
    }

    public function forgot_password()
    {
        return view('user-space.auth-forgot-password');
    }
}
