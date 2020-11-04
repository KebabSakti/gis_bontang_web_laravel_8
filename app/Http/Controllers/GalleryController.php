<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CustomClass\IDGenerator;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Gallery;
use App\CustomClass\FileUploader;

class GalleryController extends Controller
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
        return view('admin.gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::transaction(function () use($request) {
            //store and upload image
            foreach($request->image as $item) {
                Gallery::create([
                    'gallery_id' => IDGenerator::generate(),
                    'image' => FileUploader::uploadFoto($item),
                ]);
            }
        });

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
        $data = Gallery::findOrFail($id);
        $path = 'foto/'.$data->image;

        //delete foto
        if(file_exists($path)) {
            unlink($path);
        }
        
        //delete record
        $data->delete();

        return redirect()->back()->with('message', 'Proses berhasil');
    }

    public function ajax(Request $request)
    {
        $col = ['image', 'created_at', 'updated_at'];

        $query = DB::table('galleries');

        // if(!empty($request->search['value'])){
        //     $query->where(function($q) use($request, $col) {
        //         $q->where('author', 'like', '%'.$request->search['value'].'%')
        //           ->orWhere('location', 'like', '%'.$request->search['value'].'%')
        //           ->orWhere('agenda', 'like', '%'.$request->search['value'].'%');
        //     });
        // }

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
                '<a href="'.asset('foto/' . $r->image).'" data-fancybox="gallery">
                    <img src="'.asset('foto/' . $r->image).'" width="100" class="img-thumbnail">
                 </a>',
                Carbon::create($r->created_at)->format('d/m/Y H:i:s'),
                Carbon::create($r->updated_at)->format('d/m/Y H:i:s'),
                '<form method="POST" action="'.route('gallery.destroy', $r->id).'">
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
