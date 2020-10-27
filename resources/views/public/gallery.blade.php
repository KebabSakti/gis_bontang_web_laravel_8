@extends('public.layout.base')

@section('content')
<main>
    <div class="container box_1170 pt-30 pb-100">
        <h3 class="text-heading">Gallery</h3><hr>
        <div>
            <div class="row gallery-item">
                @foreach ($images as $item)
                    <div class="col-md-4">
                        <a href="{{$item->image}}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{$item->image}}); background-position:center center; border-radius:6px;"></div>
                        </a>
                    </div>
                @endforeach
            </div>
            <p class="text-center">
                {{$images->links()}}
            </p>
        </div>
    </div>
</main>
@endsection