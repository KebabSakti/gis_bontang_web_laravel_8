<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\Area;

class UserFormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function form()
    {
        $areas = Area::all();
        $options = Option::all();

        return view('public.form', [
            'areas' => $areas,
            'options' => $options,
        ]);
    }

    public function formSubmit(Request $request)
    {
        
    }
}
