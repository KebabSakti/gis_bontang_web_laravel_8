<div class="grid">
    <div class="grid-sizer"></div>
    @foreach ($datas as $item)
        <div class="grid-item">
            <a href="{{asset('foto/'.$item->image)}}" class="img-pop-up">
                <img src="{{ asset('foto/'.$item->image) }}">
            </a>
        </div>
    @endforeach
</div>