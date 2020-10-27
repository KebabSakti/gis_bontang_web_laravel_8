@extends('public.layout.base')

@section('content')

<main>
    <!-- About US Start -->
    <div class="about-area pt-30">
        <div class="container">
               <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Tittle -->
                        <div class="about-right mb-90">
                            <div class="about-img">
                                <img src="{{ $newsDetail->image }}" alt="" class="lazy" data-src="{{$newsDetail->image}}">
                            </div>
                            <div class="section-tittle mb-30 pt-30">
                                <h3>{{$newsDetail->title}}</h3>
                            </div>
                            <div class="about-prea">
                                <p class="about-pera1 mb-25 text-justify">
                                    {{$newsDetail->content}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Berita Terkait</h3>
                                @foreach ($relatedNews as $item)
                                    <div class="media post_item">
                                        <img src="{{ $item->image }}" alt="" class="lazy" data-src="{{$item->image}}" width="100">
                                        <div class="media-body">
                                            <a href="{{ route('publicpagecontroller.beritadetail', ['id'=>$item->id]) }}">
                                                <h3>{{Str::limit($item->title, 20)}}</h3>
                                            </a>
                                            <p>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at, 'Asia/Kuala_Lumpur')->format('F d, Y')}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </aside>
                        </div>
                    </div>
               </div>
        </div>
    </div>
    <!-- About US End -->
</main>
    
@endsection