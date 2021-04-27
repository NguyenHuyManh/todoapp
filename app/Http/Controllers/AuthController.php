<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email không được để trống!',
                'password.required' => 'Mật khẩu không được để trống!',
            ]
        );

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');
        } else {
            return back()->with('error', 'Email hoặc mật khẩu không đúng!');
        }
    }

    public function getRegister()
    {
        return view('auth.register');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

}
