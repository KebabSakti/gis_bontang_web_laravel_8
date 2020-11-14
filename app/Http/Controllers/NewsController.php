<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CustomClass\IDGenerator;
use App\CustomClass\FileUploader;
use Carbon\Carbon;
use Illuminate\Support\Str;

use App\Models\News;

class NewsController extends Controller
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
        return view('admin.news.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'title' => 'required',
            'tag' => 'required',
            'content' => 'required',
            'foto' => 'required',
        ]);

        $param = $request;
        $param['news_id'] = IDGenerator::generate();
        $param['image'] = FileUploader::uploadFoto($request->foto);

        News::create($param->except('_token', 'foto'));

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
        $data = News::findOrFail($id);

        return view('admin.news.edit', ['data' => $data]);
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
        $param = $request;

        if($request->hasFile('foto')){
            $path = 'foto/'.$news->image;

            //del old image
            if(file_exists($path)) {
                unlink($path);
            }

            //upload new image
            $param['image'] = FileUploader::uploadFoto($request->foto);
        }

        News::where('id', $id)->update($param->except('_token', '_method', 'foto'));

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
        $news = News::findOrFail($id);
        $path = 'foto/'.$news->image;

        //delete foto
        if(file_exists($path)) {
            unlink($path);
        }
        
        //delete record
        $news->delete();

        return redirect()->back()->with('message', 'Proses berhasil');
    }

    public function ajax(Request $request)
    {
        $col = ['title', 'tag', 'content', 'image', 'view', 'created_at', 'updated_at'];

        $query = DB::table('news');

        if(!empty($request->search['value'])){
            $query->where(function($q) use($request, $col) {
                $q->where('title', 'like', '%'.$request->search['value'].'%')
                  ->orWhere('tag', 'like', '%'.$request->search['value'].'%');
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
                Str::limit($r->title, 100),
                $r->tag,
                Str::limit($r->content, 100),
                // $status,
                '<a href="'.asset('foto/' . $r->image).'" data-fancybox="gallery">
                    <img src="'.asset('foto/' . $r->image).'" width="100" class="img-thumbnail">
                 </a>',
                 $r->view,
                Carbon::create($r->created_at)->format('d/m/Y H:i:s'),
                Carbon::create($r->updated_at)->format('d/m/Y H:i:s'),
                '<button type="button" class="btn btn-sm btn-info modal-trigger" data-target="'.route('news.edit', $r->id).'">Edit</button>
                 <form method="POST" action="'.route('news.destroy', $r->id).'">
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
