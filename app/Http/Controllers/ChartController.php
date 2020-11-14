<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\Form;

class ChartController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.chart.index');
    }

    public function ajax(Request $request)
    {
        $label = [];
        $data = [];

        $option = Option::where('tag', $request->tag)->get();
        foreach($option as $item) {
            $query = Form::where($request->tag, $item->name)->get();

            array_push($label, $item->name);
            array_push($data, $query->count());
        }

        return response()->json([
            'label' => $label,
            'data' => $data,
        ]);
    }
}
