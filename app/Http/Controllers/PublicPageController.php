<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CustomClass\IDGenerator;
use Carbon\Carbon;

use App\Models\News;
use App\Models\Gallery;
use App\Models\Profile;
use App\Models\Vision;
use App\Models\Video;
use App\Models\GuestBook;
use App\Models\StaticContent;
use App\Models\Map;
use App\Models\Form;

class PublicPageController extends Controller
{
    public function beranda()
    {
        //news
        $trendingTop = News::orderBy('view', 'desc')->limit(1)->get();
        $trendingBottom = News::where('news_id', '!=', $trendingTop[0]->news_id)->orderBy('view', 'desc')->limit(3)->get();
        $excludeRightNews = $trendingBottom->map(function($item, $key) {
            return $item->news_id;
        });
        $excludeRightNews->push($trendingTop[0]->news_id);
        $rightNews = News::whereNotIn('news_id', $excludeRightNews->toArray())->orderBy('view', 'desc')->limit(5)->get();
        $newNews = News::orderBy('created_at', 'desc')->limit(6)->get();

        //gallery
        $galleries = Gallery::limit(9)->get();

        return view('public.beranda', [
            'trendingTop' => $trendingTop,
            'trendingBottom' => $trendingBottom, 
            'rightNews' => $rightNews,
            'newNews' => $newNews,
            'galleries' => $galleries,
        ]);
    }

    public function berita()
    {
        $news = News::orderBy('view', 'desc')->paginate(3);
        $newNews = News::orderBy('created_at', 'desc')->limit(5)->get();

        return view('public.berita', [
            'news' => $news,
            'newNews' => $newNews,
        ]);
    }

    public function beritaDetail($id)
    {        
        $newsDetail = News::findOrFail($id);
        $relatedNews = News::where('id', '!=', $id)->inRandomOrder()->limit(5)->get();

        //increment view
        $newsDetail->increment('view');

        return view('public.berita_detail', [
            'newsDetail' => $newsDetail,
            'relatedNews' => $relatedNews,
        ]);
    }

    public function agenda(Request $request)
    {
        if($request->isMethod('get')){
            return view('public.agenda');
        }

        //datatable data ajax
        $col = DB::getSchemaBuilder()->getColumnListing('agendas');

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
                $r->agenda,
                Carbon::create($r->created_at)->format('d/m/Y H:i:s'),
                Carbon::create($r->updated_at)->format('d/m/Y H:i:s'),
            ];
        }

        return response()->json([
            'draw' => (int)$request->draw++,
            'recordsTotal' => $total,
            'recordsFiltered' => $filter,
            'data' => $data
        ]);
    }

    public function profile()
    {
        $profile = StaticContent::where('tag', 'profil')->first();
        $vision = StaticContent::where('tag', 'visi')->first();

        return view('public.profile', [
            'profile' => $profile,
            'vision' => $vision,
        ]);
    }

    public function video()
    {
        $videos = Video::orderBy('created_at', 'desc')->paginate(3);
        $otherVideos = Video::inRandomOrder()->limit(5)->get();

        return view('public.video', [
            'videos' => $videos,
            'otherVideos' => $otherVideos,
        ]);
    }

    public function gallery()
    {
        $images = Gallery::orderBy('created_at', 'desc')->paginate(20);

        return view('public.gallery', [
            'images' => $images,
        ]);
    }

    public function kontak()
    {
        return view('public.kontak');
    }

    public function kontakSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'messages' => 'required',
        ]);

        $param = $request;
        $param['guest_book_id'] = IDGenerator::generate();

        GuestBook::create($param->except('_token'));

        return redirect()->back()->with('message','Terima kasih telah menghubungi, kami akan respon pesan anda secepatnya');
    }

    public function peta()
    {
        return view('public.peta');
    }

    public function petaAjax(Request $request)
    {
        $form = Form::all();
        $poly = Map::all();

        return response()->json([
            'forms' => $form->toArray(),
            'polies' => $poly->toArray(),
        ]);
    }
}
