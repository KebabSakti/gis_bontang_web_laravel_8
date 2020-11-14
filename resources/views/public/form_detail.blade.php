<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo-bontang-only.png') }}">
    <title>Form Detail</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <!-- FancyBox -->
    <link href="{{ asset('assets/js/fancybox-master/dist/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        html, body {
            height: 100%;
            background-color: #efefef;
        }
    </style>

</head>
<body>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-lg-8 col-md-12 card pt-4 pb-4 m-2">
            <h4 class="text-center mb-4">Form Detail</h4>
            @if (session('message'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            @endif
            
            <form method="" action="" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                <div class="item form-group">
                    <label class="col-form-label col label-align">Nama Lengkap</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->nama_lengkap}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">NIK</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->nik}}" readonly>
                    </div>
                </div>
                <p class="text-center">
                    <i class="fa fa-chevron-circle-down fa-fw"></i>
                    <a class="text-primary form-detail" data-toggle="collapse" href="#collapse" aria-expanded="false" aria-controls="collapse">Tampilkan Detail</a>
                </p>
                <hr>
                <div class="collapse" id="collapse">
                <div class="item form-group">
                    <label class="col-form-label col label-align">DESA / KELURAHAN</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->kelurahan}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">KECAMATAN</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->kecamatan}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">KABUPATEN / KOTA</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->kabupaten}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">PROVINSI</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->provinsi}}" readonly>
                    </div>
                </div>
                <hr>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Nama Lengkap</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->nama_lengkap}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Kordinat</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->lat.' / '.$data->lng}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Usia (Tahun)</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->usia}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Pendidikan Terakhir</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->pendidikan}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Jenis Kelamin</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->jk}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Alamat Lengkap</label>
                    <div class="col">
                        <textarea class="form-control" cols="30" rows="5" readonly>{{$data->alamat}}</textarea>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Nomor KTP (NIK)</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->nik}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Nomor KK</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->no_kk}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Jumlah KK dalam 1 rumah</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->jumlah_kk}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Pekerjaan Utama</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->pekerjaan}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Penghasilan atau pengeluaran per bulan</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->penghasilan}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Status kepemilikan tanah</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->kepemilikan_tanah}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Status kepemilikan rumah</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->kepemilikan_rumah}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Aset rumah di tempat lain</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->aset_rumah}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Aset tahah di tempat lain</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->aset_tanah}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Pernah mendapatkan bantuan perumahan</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->bantuan_perumahan}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Jenis kawasan lokasi rumah yang ditempati</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->lokasi_rumah}}" readonly>
                    </div>
                </div>
                <hr>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Pondasi</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->pondasi}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Kondisi kolom dan balok</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->kolom_balok}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Kondisi konstruksi atap</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->konstruksi_atap}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Jendela/Lubang cahaya</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->jendela}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Ventilasi</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->ventilasi}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Kepemilikan kamar mandi dan jamban</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->kamar_mandi}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Jarak sumber air minum ke TPA tinja</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->jarak_air}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Sumber air minum</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->sumber_air}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Sumber listrik</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->sumber_listrik}}" readonly>
                    </div>
                </div>
                <hr>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Luas rumah (per meter persegi)</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->luas_rumah}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Jumlah penghuni (Orang)</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->jumlah_penghuni}}" readonly>
                    </div>
                </div>
                <hr>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Material atap terluas</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->material_atap}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Kondisi atap</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->kondisi_atap}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Material dinding terluas</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->material_dinding}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Kondisi dinding</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->kondisi_dinding}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Material lantai terluas</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->material_lantai}}" readonly>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col label-align">Kondisi lantai</label>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$data->kondisi_lantai}}" readonly>
                    </div>
                </div>
                </div>
            </form>

            <!-- FOTO -->
            <h4 class="text-center mb-30">Foto</h4>
            <div class="row">
                @foreach ($tags as $key => $tag)
                    @php
                        $fotos = $data->fotos()->where('tag', $key)->get();
                    @endphp
                    <div class="col-md-6 col-sm-12 mb-2">
                        <a class="text-dark {{$key}}" data-fancybox-trigger="{{$key}}" data-fancybox-index="0" href="javascript:;">
                            <div class="card">
                                <div class="card-body">
                                    {{$tag}}
                                    <strong class="float-right text-success">{{count($fotos)}}</strong>
                                </div>
                            </div>
                        </a>
                        @foreach ($fotos as $item)
                            <a data-fancybox="{{$item->tag}}" href="{{ asset('foto/'.$item->foto) }}">
                                <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                            </a>
                        @endforeach
                    </div>
                @endforeach
            </div>
            
          </div>  
        </div>
    </div>


    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- fancybox -->
    <script src="{{ asset('assets/js/fancybox-master/dist/jquery.fancybox.min.js') }}"></script>
    <script>
        $(function() {
            var path = window.location.pathname;
            var tag = path.split("/").pop();
            var aTag = $('.'+tag);

            $('.form-detail').click(function() {
                var element = $(this);
                var txt = 'Tampilkan Detail';

                element.text(element.text() === txt ? 'Sembunyikan Detail':txt);                
            });

            if(aTag.length > 0){
                aTag.click();
            }
        });
    </script>
</body>
</html>