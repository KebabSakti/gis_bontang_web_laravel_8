<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CustomClass\IDGenerator;
use Carbon\Carbon;

use App\Models\Area;

class AreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.area.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.area.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'tag' => 'required',
            'name' => 'required',
        ]);

        $param = $request;
        $param['area_id'] = IDGenerator::generate();

        Area::create($param->except('_token'));

        return redirect()->back()->with('message', 'Proses berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Area::findOrFail($id);

        return view('admin.area.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Area::where('id', $id)->update($request->except('_token', '_method'));

        return redirect()->back()->with('message', 'Proses berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ajax(Request $request)
    {
        $col = DB::getSchemaBuilder()->getColumnListing('areas');

        $query = DB::table('areas');

        if(!empty($request->search['value'])){
            $query->where(function($q) use($request, $col) {
                $q->where('tag', 'like', '%'.$request->search['value'].'%')
                  ->orWhere('name', 'like', '%'.$request->search['value'].'%')
                  ->orWhere('code', 'like', '%'.$request->search['value'].'%');
            });
        }

        $table = $query->orderBy($col[$request->order[0]['column']], $request->order[0]['dir'])->get();
        
        //total record
        $total = $query->get()->count();
        
        //total record with search value
        $filter = (!empty($request->search['value'])) ? 
            $table->count()
            :
            $total;

        $data = [];
        foreach ($table as $r) {
            $data[] = [
                $r->code,
                $r->tag,
                $r->name,
                Carbon::create($r->created_at)->format('d/m/Y H:i:s'),
                Carbon::create($r->updated_at)->format('d/m/Y H:i:s'),
                '<button type="button" class="btn btn-sm btn-info modal-trigger" data-target="'.route('area.edit', $r->id).'">Edit</button>',
            ];
        }

        return response()->json([
            'draw' => (int)$request->draw++,
            'recordsTotal' => $total,
            'recordsFiltered' => $filter,
            'data' => $data
        ]);
    }

    public function ajaxCode(Request $request)
    {
        $area = Area::where('code', $request->code)->first();

        return response()->json($area);
    }
}
