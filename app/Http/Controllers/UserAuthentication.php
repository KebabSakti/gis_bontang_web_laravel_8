<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthentication extends Controller
{
    public function login($redirect = null)
    {
        return view('public.login');
    }

    public function loginSubmit(Request $request)
    {
        $credential = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'active' => 1,
        ]);

        if($credential) {
            return redirect()->route('user.form');
        }

        return redirect()->back()->with('message', 'Login gagal, cek kembali email dan password anda atau hubungi admin jika anda belum terdaftar');
    }
}
