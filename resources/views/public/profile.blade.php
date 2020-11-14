@extends('public.layout.base')

@section('content')
    
<main>
    <div class="container box_1170 pt-30 pb-100">
        <h3 class="text-heading">Profil</h3><hr>
        <div>
            <p class="text-justify">
                {!! nl2br(e($profile->content), false) !!}
            </p>
        </div>
        <h3 class="text-heading mt-100">Visi & Misi</h3><hr>
        <div>
            <p class="text-justify">
                {!! nl2br(e($vision->content), false) !!}
            </p>
        </div>
    </div>
</main>

@endsection