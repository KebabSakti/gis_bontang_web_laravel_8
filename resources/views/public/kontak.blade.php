@extends('public.layout.base')

@section('content')
    
<main>
    <div class="container box_1170 pt-30 pb-100">
        <h3 class="text-heading">Kontak</h3><hr>
        @if (session('message'))

            <div class="alert alert-info alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>

        @endif
        <div>
            <div class="row">
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{ route('publicpagecontroller.kontaksubmit') }}" method="post" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="messages" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ketik pesan anda'" placeholder=" Ketik pesan anda"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ketik nama anda'" placeholder="Ketik nama anda">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="phone" id="email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ketik no hp anda'" placeholder="Ketik no hp anda">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ketik subjek anda'" placeholder="Ketik subjek anda">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Kirim</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Perumahan Unmul</h3>
                            <p>Jl Dayak Modang No 28</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+62 812 5498 2664</h3>
                            <p>VJ TECH SOLUTION</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>admin@vjtechsolution.com</h3>
                            <p>Julian Aryo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection