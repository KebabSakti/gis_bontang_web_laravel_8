@extends('public.layout.base')

@section('content')
<main>
    <div class="container box_1170 pt-30 pb-100">
        <h3 class="text-heading">Gallery</h3><hr>
        <div>
            <div class="grid">
                <div class="grid-sizer"></div>
                @foreach ($images as $item)
                    <div class="grid-item">
                        <a href="{{asset('foto/'.$item->image)}}" class="img-pop-up">
                            {{-- <div class="" style="background: url({{asset('foto/'.$item->image)}}); background-position:center center; border-radius:6px;"></div> --}}
                            <img src="{{ asset('foto/'.$item->image) }}">
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