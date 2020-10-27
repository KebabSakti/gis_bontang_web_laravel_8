@extends('public.layout.base')

@section('content')

<main>
<!-- Trending Area Start -->
<div class="trending-area fix">
    <div class="container">
        <div class="trending-main pt-30">
            <!-- Trending Tittle -->
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    <div class="trending-top mb-30">
                        <div class="trend-top-img">
                            <img src="{{$trendingTop[0]->image}}" alt="" class="lazy" data-src="{{$trendingTop[0]->image}}">
                            <div class="trend-top-cap">
                                <span>{{$trendingTop[0]->tag}}</span>
                                <h2><a href="{{ route('publicpagecontroller.beritadetail', ['id'=>$trendingTop[0]->id]) }}">{{$trendingTop[0]->title}}</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- Trending Bottom -->
                    <div class="trending-bottom">
                        <div class="row">
                            @foreach ($trendingBottom as $item)
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{$item->image}}" alt="" class="lazy" data-src="{{$item->image}}">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color1">{{$item->tag}}</span>
                                            <h4><a href="{{ route('publicpagecontroller.beritadetail', ['id'=>$item->id]) }}">{{$item->title}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Riht content -->
                <div class="col-lg-4">
                    @foreach ($rightNews as $item)
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="{{$item->image}}" width="100" alt="" class="lazy" data-src="{{$item->image}}">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">{{$item->tag}}</span>
                                <h4><a href="{{ route('publicpagecontroller.beritadetail', ['id'=>$item->id]) }}">{{$item->title}}</a></h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trending Area End -->
<!-- Start Youtube -->
{{-- <div class="youtube-area video-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="video-items-active">
                    <div class="video-items text-center">
                        <iframe src="https://www.youtube.com/embed/CicQIuG8hBo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="video-items text-center">
                        <iframe  src="https://www.youtube.com/embed/rIz00N40bag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="video-items text-center">
                        <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                    <div class="video-items text-center">
                        <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     
                    </div>
                    <div class="video-items text-center">
                        <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-info">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-caption">
                        <div class="top-caption">
                            <span class="color1">Politics</span>
                        </div>
                        <div class="bottom-caption">
                            <h2>Welcome To The Best Model Winner Contest At Look of the year</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit lorem ipsum dolor sit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testmonial-nav text-center">
                        <div class="single-video">
                            <iframe  src="https://www.youtube.com/embed/CicQIuG8hBo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="video-intro">
                                <h4>Welcotme To The Best Model Winner Contest</h4>
                            </div>
                        </div>
                        <div class="single-video">
                            <iframe  src="https://www.youtube.com/embed/rIz00N40bag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="video-intro">
                                <h4>Welcotme To The Best Model Winner Contest</h4>
                            </div>
                        </div>
                        <div class="single-video">
                            <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="video-intro">
                                <h4>Welcotme To The Best Model Winner Contest</h4>
                            </div>
                        </div>
                        <div class="single-video">
                            <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="video-intro">
                                <h4>Welcotme To The Best Model Winner Contest</h4>
                            </div>
                        </div>
                        <div class="single-video">
                            <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="video-intro">
                                <h4>Welcotme To The Best Model Winner Contest</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  --}}
<!-- End Start youtube -->

<!--   Weekly2-News start -->
<div class="trending-area fix mt-30 mb-30">
    <div class="container">
        <div class="weekly2-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Gallery</h3>
                    </div>
                </div>
            </div>
            <div class="row gallery-item">
                @foreach ($galleries as $item)
                    <div class="col-md-4">
                        <a href="{{$item->image}}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{$item->image}}); background-position:center center; border-radius:6px;"></div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>           
<!-- End Weekly-News -->

<!--   Weekly2-News start -->
<div class="weekly2-news-area  weekly2-pading gray-bg">
    <div class="container">
        <div class="weekly2-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Berita Terbaru</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="weekly2-news-active dot-style d-flex dot-style">
                        @foreach ($newNews as $item)
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="{{$item->image}}" alt="" class="lazy" data-src="{{$item->image}}">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">{{$item->tag}}</span>
                                    <p>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at, 'Asia/Kuala_Lumpur')->format('d M Y')}}</p>
                                    <h4><a href="{{ route('publicpagecontroller.beritadetail', ['id'=>$item->id]) }}">{{$item->title}}</a></h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>           
<!-- End Weekly-News -->

</main>

@endsection