<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthentication extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only('logout');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function loginSubmit(Request $request)
    {
        $credential = Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if($credential) {
            return redirect()->route('admin.beranda');
        }

        return redirect()->back()->with('message', 'Login gagal, cek kembali email dan password anda');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('auth.admin.loginpage');
    }
}
