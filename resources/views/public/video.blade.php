@extends('public.layout.base')

@section('content')
    
<main>
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach ($videos as $item)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="https://img.youtube.com/vi/{{Str::after($item->link, '=')}}/mqdefault.jpg" style="width:100%; alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at, 'Asia/Kuala_Lumpur')->format('d')}}</h3>
                                        <p>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at, 'Asia/Kuala_Lumpur')->format('M')}}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ $item->link }}" data-fancybox>
                                        <h2>{{$item->title}}</h2>
                                    </a>
                                    <p>
                                        {{Str::limit($item->content, 300)}}
                                    </p>
                                </div>
                            </article>
                        @endforeach

                        {{$videos->links()}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Video Lain</h3>
                            @foreach ($otherVideos as $item)
                                <div class="media post_item">
                                    <img src="https://img.youtube.com/vi/{{Str::after($item->link, '=')}}/mqdefault.jpg" alt="" width="100">
                                    <div class="media-body">
                                        <a href="{{$item->link}}" data-fancybox>
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
    </section>
    <!--================Blog Area =================-->
</main>

@endsection