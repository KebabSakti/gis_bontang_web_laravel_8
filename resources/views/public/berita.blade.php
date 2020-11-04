@extends('public.layout.base')

@section('content')

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach ($news as $item)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset('foto/'.$item->image) }}" alt="">
                                    <a href="{{ route('publicpagecontroller.beritadetail', ['id'=>$item->id]) }}" class="blog_item_date">
                                        <h3>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at, 'Asia/Kuala_Lumpur')->format('d')}}</h3>
                                        <p>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at, 'Asia/Kuala_Lumpur')->format('M')}}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route('publicpagecontroller.beritadetail', ['id'=>$item->id]) }}">
                                        <h2>{{$item->title}}</h2>
                                    </a>
                                    <p>
                                        {{Str::limit($item->content, 300)}}
                                    </p>
                                </div>
                            </article>
                        @endforeach

                        {{$news->links()}}

                        {{-- <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Berita Terbaru</h3>
                            @foreach ($newNews as $item)
                                <div class="media post_item">
                                    <img src="{{ asset('foto/'.$item->image) }}" alt="" class="lazy" data-src="{{asset('foto/'.$item->image)}}" width="100">
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
    </section>
    <!--================Blog Area =================-->
    
@endsection