<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CustomClass\IDGenerator;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Form;
use App\Models\Foto;
use App\Exports\FormExport;
use PDF;

class FormulirController extends Controller
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
        return view('admin.formulir.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Form::findOrFail($id);

        return view('admin.formulir.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
        $col = ['name', 'nama_lengkap', 'nik', 'kelurahan', 'kecamatan', 'kabupaten', 'provinsi', 'created_at', 'updated_at'];

        $query = DB::table('forms');

        if(!empty($request->search['value'])){
            $query->where(function($q) use($request, $col) {
                $q->where('name', 'like', '%'.$request->search['value'].'%')
                  ->orWhere('nama_lengkap', 'like', '%'.$request->search['value'].'%')
                  ->orWhere('nik', 'like', '%'.$request->search['value'].'%')
                  ->orWhere('kelurahan', 'like', '%'.$request->search['value'].'%')
                  ->orWhere('kecamatan', 'like', '%'.$request->search['value'].'%')
                  ->orWhere('kabupaten', 'like', '%'.$request->search['value'].'%')
                  ->orWhere('provinsi', 'like', '%'.$request->search['value'].'%');
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
                $r->name,
                $r->nama_lengkap,
                $r->nik,
                $r->kelurahan,
                $r->kecamatan,
                $r->kabupaten,
                $r->provinsi,
                Carbon::create($r->created_at)->format('d/m/Y H:i:s'),
                Carbon::create($r->updated_at)->format('d/m/Y H:i:s'),
                '<button type="button" class="btn btn-sm btn-primary modal-trigger" data-target="'.route('formulir.show', $r->id).'">Detail</button>',
            ];
        }

        return response()->json([
            'draw' => (int)$request->draw++,
            'recordsTotal' => $total,
            'recordsFiltered' => $filter,
            'data' => $data
        ]);
    }

    public function export()
    {
        return view('admin.formulir.export_option');
    }

    public function exportSubmit(Request $request)
    {
        $range = explode('-', str_replace(' ', '', $request->periode));
        $start = $range[0];
        $end = $range[1];
        $dateString = Carbon::createFromFormat('d/m/Y', $start, 'UTC')->format('d-m-Y').' - '.Carbon::createFromFormat('d/m/Y', $end, 'UTC')->format('d-m-Y');

        $filename = 'Rekap '.$dateString;

        if($request->format == 'excel') {
            return Excel::download(new FormExport($start, $end), $filename.'.xlsx');
        }else{
            $dateStart = Carbon::createFromFormat('d/m/Y', $start, 'UTC')->format('Y-m-d');
            $dateEnd = Carbon::createFromFormat('d/m/Y', $end, 'UTC')->format('Y-m-d');
            
            $data = Form::whereDate('created_at', '>=', $dateStart)
                        ->whereDate('created_at', '<=', $dateEnd)
                        ->get();

            $pdf = PDF::loadView('admin.formulir.export_pdf', ['data' => $data]);
            return $pdf->setpaper('a4', 'landscape')->download($filename.'.pdf');
        }
    }

    public function foto($id, $tag)
    {
        $datas = Foto::where('form_id', $id)
                    ->where('tag', $tag)
                    ->get();

        return view('admin.formulir.foto', ['datas' => $datas]);
    }
}
