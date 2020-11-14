<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;


class AdminAuthentication extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only('logout', 'edit', 'update');
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

    public function edit($id)
    {
        $data = Admin::findOrFail($id);

        return view('admin.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => !(empty($request->password)) ? 'required|min:8':'',
        ]);

        $admin = Admin::findOrFail($id);

        $admin->name = $request->name;
        $admin->email = $request->email;

        if(!empty($request->password)) {
            $admin->password = Hash::make($request->password);
        }

        $admin->save();

        return redirect()->back()->with('message', 'Proses berhasil');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('auth.admin.loginpage');
    }
}
