<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\CustomClass\IDGenerator;
use Carbon\Carbon;
use Illuminate\Support\Str;

use App\Models\Agenda;

class AgendaController extends Controller
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
        return view('admin.agenda.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agenda.create');
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
            'author' => 'required',
            'location' => 'required',
            'agenda' => 'required',
        ]);

        $param = $request;
        $param['agenda_id'] = IDGenerator::generate();

        Agenda::create($param->except('_token'));

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
        $data = Agenda::findOrFail($id);
        
        return view('admin.agenda.edit', ['data' => $data]);
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
        $request->validate([
            'author' => 'required',
            'location' => 'required',
            'agenda' => 'required',
        ]);

        Agenda::where('id', $id)->update($request->except('_token', '_method'));

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
        $news = Agenda::findOrFail($id);
        
        //delete record
        $news->delete();

        return redirect()->back()->with('message', 'Proses berhasil');
    }

    public function ajax(Request $request)
    {
        $col = ['author', 'location', 'agenda', 'created_at', 'updated_at'];

        $query = DB::table('agendas');

        if(!empty($request->search['value'])){
            $query->where(function($q) use($request, $col) {
                $q->where('author', 'like', '%'.$request->search['value'].'%')
                  ->orWhere('location', 'like', '%'.$request->search['value'].'%')
                  ->orWhere('agenda', 'like', '%'.$request->search['value'].'%');
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
                $r->author,
                $r->location,
                Str::limit($r->agenda, 100),
                Carbon::create($r->created_at)->format('d/m/Y H:i:s'),
                Carbon::create($r->updated_at)->format('d/m/Y H:i:s'),
                '<button type="button" class="btn btn-sm btn-info modal-trigger" data-target="'.route('agenda.edit', $r->id).'">Edit</button>
                 <form method="POST" action="'.route('agenda.destroy', $r->id).'">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-sm btn-danger confirm">Hapus</button>
                 </form>',
            ];
        }

        return response()->json([
            'draw' => (int)$request->draw++,
            'recordsTotal' => $total,
            'recordsFiltered' => $filter,
            'data' => $data
        ]);
    }
}
