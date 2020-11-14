<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomClass\IDGenerator;
use App\Models\Form;
use App\Models\Map;

class MapController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.map.index');
    }

    public function ajax(Request $request)
    {
        $form = Form::all();
        $poly = Map::all();

        return response()->json([
            'forms' => $form->toArray(),
            'polies' => $poly->toArray(),
        ]);
    }

    public function ajaxSave(Request $request)
    {
        $map = Map::first();

        if($map == null){
            $map = new Map;
            $map->map_id = IDGenerator::generate();
        }

        $map->content = $request->content;
        $map->save();

        return response()->json(200);
    }
}
