<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email:rfc,dns',
                'password' => 'required|min:6|max:32'
            ],
            [
                'email.required' => 'Email không được để trống!',
                'email.email' => 'Email không đúng định dạng!',
                'password.required' => 'Mật khẩu không được để trống!',
                'password.min' => 'Mật khẩu phải có ít nhất 6 kí tự!',
                'password.max' => 'Mật khẩu tối đa 32 kí tự!',
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => $validator->errors(),
            ]);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['login' => 'success']);
            // return redirect()->route('home');
        } else {
            return response()->json([
                'login' => 'fail',
                'message' => 'Email hoặc mật khẩu không đúng!',
            ]);
            // return back()->with('error', 'Email hoặc mật khẩu không đúng!');
        }
    }

    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required',
                'password_confirm' => 'required|same:password',
            ],
            [
                'name.required' => 'Vui lòng nhật tên của bạn!',
                'email.required' => 'Email không được để trống!',
                'email.unique' => 'Email đã được dùng!',
                'password.required' => 'Mật khẩu không được để trống!',
                'password_confirm.required' => 'Vui lòng nhập lại mật khẩu!',
                'password_confirm.same' => 'Mật khẩu vừa nhập không đúng!',
            ]
        );

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');
        }
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
