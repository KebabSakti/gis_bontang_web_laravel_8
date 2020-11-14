<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CustomClass\IDGenerator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
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
        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
        ]);

        $param = $request;
        $param['user_id'] = IDGenerator::generate();
        $param['password'] = Hash::make($request->password);

        User::create($param->except('_token'));

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
        $data = User::findOrFail($id);

        return view('admin.user.edit', ['data' => $data]);
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
            'name' => 'required',
            'active' => 'required',
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->active = $request->active;

        if(!empty($request->password)) {
            $param['password'] = Hash::make($request->password);
        }

        $user->save();

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
        $col = ['name', 'email', 'active', 'created_at', 'updated_at'];

        $query = DB::table('users');

        if(!empty($request->search['value'])){
            $query->where(function($q) use($request, $col) {
                $q->where('name', 'like', '%'.$request->search['value'].'%')
                  ->orWhere('email', 'like', '%'.$request->search['value'].'%');
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
            $status = ($r->active) ? '<span class="badge badge-pill badge-success">Aktif</span>':'<span class="badge badge-pill badge-danger">Non Aktif</span>';

            $data[] = [
                $r->name,
                $r->email,
                $status,
                Carbon::create($r->created_at)->format('d/m/Y H:i:s'),
                Carbon::create($r->updated_at)->format('d/m/Y H:i:s'),
                '<button type="button" class="btn btn-sm btn-info modal-trigger" data-target="'.route('user.edit', $r->id).'">Edit</button>',
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
