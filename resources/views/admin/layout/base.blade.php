<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin GIS Bontang</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <!-- NProgress -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/nprogress/nprogress.css') }}">
    <!-- Data Table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/datatables.min.css"/>
    <!-- FancyBox -->
    <link href="{{ asset('assets/js/fancybox-master/dist/jquery.fancybox.min.css') }}" rel="stylesheet">
    <!-- leaflet map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css"/>
    <!-- DT RANGE -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- Admin Theme Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/admin.min.css') }}">
    <style>
        .dataTables_wrapper .dataTables_processing {
            height: 50px;
            background-color: #2A3F54;
            border-radius: 25px;
            border: none;
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

  <body class="nav-md">
    
    <!-- Modal -->
    <div class="modal fade" id="mainModal" tabindex="-1" role="dialog" aria-labelledby="mainModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                Memuat..
            </div>
        </div>
        </div>
    </div>

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('admin.beranda') }}" class="site_title"><i class="fa fa-map"></i> <span>GIS BONTANG</span></a>
            </div>

            <div class="clearfix"></div>
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li>
                      <a href="{{ route('admin.beranda') }}">
                          <i class="fa fa-home"></i> Beranda
                      </a>
                  </li>
                  <li>
                    <a href="{{ route('user.index') }}">
                        <i class="fa fa-user"></i> User
                    </a>
                  </li>
                  <li><a><i class="fa fa-cog"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('option.index') }}">Formulir</a></li>
                      <li><a href="{{ route('area.index') }}">Area</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="{{ route('news.index') }}">
                        <i class="fa fa-file"></i> Berita
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('agenda.index') }}">
                        <i class="fa fa-calendar"></i> Agenda
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('static.index') }}">
                        <i class="fa fa-briefcase"></i> Konten Statis
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('video.index') }}">
                        <i class="fa fa-youtube-play"></i> Video
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('pesan.index') }}">
                        <i class="fa fa-comments"></i> Pesan
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('gallery.index') }}">
                        <i class="fa fa-photo"></i> Gallery
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('formulir.index') }}">
                        <i class="fa fa-newspaper-o"></i> Formulir
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('chart.index') }}">
                        <i class="fa fa-bar-chart"></i> Statistik
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('map.index') }}">
                        <i class="fa fa-map-marker"></i> Peta
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      {{Auth::guard('admin')->user()->name}}
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item modal-trigger" data-target="{{ route('auth.admin.edit', ['id' => Auth::guard('admin')->user()->id]) }}" href="javascript:;"> Edit Detail Login</a>
                        <a class="dropdown-item"  href="{{ route('auth.admin.logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->
          
        @if (session('message'))

          <div class="alert alert-info alert-dismissible fade show" role="alert" style="position: absolute; right:20px; top:60px; z-index:999999;">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        @endif

        @if ($errors->any())

          <div class="alert alert-danger alert-dismissible fade show" role="alert" style="position: absolute; right:20px; top:60px; z-index:999999;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
        @endif

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright &copy; 2020 | Website by <a href="https://vjtechsolution.com" target="_blank">vjtechsolution.com</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Datatable -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/datatables.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dtpipeline.js') }}"></script>
    <!-- fancybox -->
    <script src="{{ asset('assets/js/fancybox-master/dist/jquery.fancybox.min.js') }}"></script>
    <!-- DT RANGE -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- CHART JS -->
    <script src="{{ asset('assets/vendors/chart/dist/Chart.min.js') }}"></script>
    <!-- Leaflet -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.js"></script>
    <!-- Masonry Staggered Grid -->
    {{-- <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> --}}
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/js/admin.min.js') }}"></script>
    <!-- Custom Admin Script -->
    <script src="{{ asset('assets/js/admin.custom.js') }}"></script>

    <!-- App scripts -->
    @stack("scripts")
  </body>
</html>
