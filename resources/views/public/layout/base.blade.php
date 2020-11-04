<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>GIS BONTANG</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo-bontang-only.png') }}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
            {{-- <link rel="stylesheet" href="assets/css/ticker-style.css"> --}}
            <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
            <link href="{{ asset('assets/js/fancybox-master/dist/jquery.fancybox.min.css') }}" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/datatables.min.css"/>
            <style>
                .lazy {
                    background: #f6f7f8;
                    background-image: linear-gradient(to right, #f6f7f8 0%, #edeef1 20%, #f6f7f8 40%, #f6f7f8 100%);
                    background-repeat: no-repeat;
                    background-size: 800px 104px; 
                    display: inline-block;
                    position: relative; 
                    
                    -webkit-animation-duration: 1s;
                    -webkit-animation-fill-mode: forwards; 
                    -webkit-animation-iteration-count: infinite;
                    -webkit-animation-name: placeholderShimmer;
                    -webkit-animation-timing-function: linear;
                }

                .grid {
                    background: #FFF;
                }

                /* clear fix */
                .grid:after {
                    content: '';
                    display: block;
                    clear: both;
                }

                /* ---- .grid-item ---- */

                .grid-sizer,
                .grid-item {
                    width: 32.7%;
                    margin-bottom: 10px;
                }

                .grid-item {
                    float: left;
                }

                .grid-item img {
                    display: block;
                    width: 100%;
                }
            </style>
   </head>

   <body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/img/logo/logo-bontang-only.png') }}" alt="">
                </div>
            </div>
        </div>
    </div> 
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li>{{\Carbon\Carbon::now(new DateTimeZone('Asia/Kuala_Lumpur'))->format('l d F Y H:i A')}}</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                       <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
                <div class="header-mid d-none d-md-block">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="{{ route('publicpagecontroller.beranda') }}"><img src="{{ asset('assets/img/logo/logo-bontang.png') }}" alt=""></a>
                                </div>
                            </div>
                            {{-- <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="assets/img/hero/header_card.jpg" alt="">
                                </div>
                            </div> --}}
                        </div>
                   </div>
                </div>
               <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="{{ route('publicpagecontroller.beranda') }}"><img src="{{ asset('assets/img/logo/logo-bontang.png') }}" alt=""></a>
                                    </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>                  
                                        <ul id="navigation">    
                                            <li><a href="{{ route('publicpagecontroller.beranda') }}">Beranda</a></li>
                                            <li><a href="{{ route('publicpagecontroller.berita') }}">Berita</a></li>
                                            <li><a href="{{ route('publicpagecontroller.agenda') }}">Agenda</a></li>
                                            <li><a href="{{ route('publicpagecontroller.profile') }}">Profil</a></li>
                                            <li><a href="{{ route('publicpagecontroller.video') }}">Video</a></li>
                                            <li><a href="{{ route('publicpagecontroller.gallery') }}">Gallery</a></li>
                                            <li><a href="{{ route('publicpagecontroller.kontak') }}">Kontak</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>             
                            {{-- <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="Search">
                                            
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    @yield('content')  
      
   <footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="{{ route('publicpagecontroller.beranda') }}"><img src="{{ asset('assets/img/logo/logo-bontang-white.png') }}" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales  Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales  Suscipit mauris pede for sectetuer.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- footer-bottom aera -->
       {{-- <div class="footer-bottom-area">
           <div class="container">
               <div class="footer-borders">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>                             
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div> --}}
       <!-- Footer End-->
   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        {{-- <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script> --}}
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/slick.min.js') }}"></script>
        <!-- Date Picker -->
        <script src="{{ asset('assets/js/gijgo.min.js') }}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
		<script src="{{ asset('assets/js/animated.headline.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

        <!-- Breaking New Pluging -->
        {{-- <script src="./assets/js/jquery.ticker.js"></script> --}}
        {{-- <script src="./assets/js/site.js"></script> --}}

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
        
        <!-- contact js -->
        <script src="{{ asset('assets/js/contact.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/js/mail-script.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

        <!-- lazy -->
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>

        <!-- date range picker -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

        <!-- Moment js -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

        <!-- Datatable -->
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/datatables.min.js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/dtpipeline.js') }}"></script>

        <!-- fancybox -->
        <script src="{{ asset('assets/js/fancybox-master/dist/jquery.fancybox.min.js') }}"></script>

        <!-- Masonry Staggered Grid -->
        <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <script>
            var $grid = $('.grid').imagesLoaded( function() {
                // init Masonry after all images have loaded
                $grid.masonry({
                    itemSelector: '.grid-item',
                    percentPosition: true,
                    columnWidth: '.grid-sizer',
                    gutter: 10,
                    percentPosition: true,
                });
            });
        </script>

        <!-- App scripts -->
        @stack("scripts")
        
    </body>
</html>