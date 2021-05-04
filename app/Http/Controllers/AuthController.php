<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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

    // Profile
    public function profile()
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        $userId = User::find(Auth::user()->id);

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars');
            $userId->avatar = $path;
        }

        $userId->name = $request->name;
        $userId->email = $request->email;
        
        if ($request->password) {
            $userId->password = Hash::make($request->password);
        }

        $userId->save();


        return redirect()->route('home');
    }
}
