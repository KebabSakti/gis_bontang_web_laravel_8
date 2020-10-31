<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function beranda()
    {
        return view('admin.beranda');
    }
}
