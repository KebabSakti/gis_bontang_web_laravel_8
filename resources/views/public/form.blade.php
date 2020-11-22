<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo-bontang-only.png') }}">
    <title>Form Pendataan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        html, body {
            height: 100%;
            background-color: #efefef;
        }
        .foto {
            height: 0px;
            width: 0px;
            overflow: hidden;
            display: none;
        }
        .foto-trigger {
            cursor: pointer;
            font-size: 14px;
        }
    </style>

</head>
<body>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-lg-8 col-md-12 card pt-4 pb-4 m-2">
            <h4 class="text-center mb-4">Form Pendataan</h4>
            @if (session('message'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            @endif
            <form id="validate-form" method="POST" action="{{ route('user.formsubmit') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="form_id" value="{{App\CustomClass\IDGenerator::generate()}}">
                <input type="hidden" name="user_id" value="{{Auth::user()->user_id}}">
                <input type="hidden" name="name" value="{{Auth::user()->name}}">
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-caret-right aria-hidden="true"></i></div>
                    <select name="kelurahan" class="form-control single-input" required>
                        <option value="">- Pilih Desa / Kelurahan -</option>
                        @foreach ($areas->where('tag', 'kelurahan') as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-caret-right aria-hidden="true"></i></div>
                    <select name="kecamatan" class="form-control single-input" required>
                        <option value=""> - Pilih Kecamatan - </option>
                        @foreach ($areas->where('tag', 'kecamatan') as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-caret-right aria-hidden="true"></i></div>
                    <select name="kabupaten" class="form-control single-input" required>
                        <option value=""> - Pilih Kabupaten / Kota - </option>
                        @foreach ($areas->where('tag', 'kabupaten') as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                    <select name="provinsi" class="form-control single-input" required>
                        <option value=""> - Pilih Provinsi - </option>
                        @foreach ($areas->where('tag', 'provinsi') as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-30" style="border-bottom: 0.5px solid #efefef;">
                    <h6>I. IDENTITAS PENGHUNI RUMAH</h6>
                </div>
                <div class="mt-10">
                    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="single-input" required>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mt-10">
                            <input type="text" name="lat" placeholder="Kordinat (Latitude)" class="single-input" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mt-10">
                            <input type="text" name="lng" placeholder="Kordinat (Longitude)" class="single-input" required>
                        </div>
                    </div>
                    <div class="col col-md-2">
                        <div class="input-group mt-10">
                            <button type="button" class="genric-btn info radius lokasi">Lokasi</button>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <input type="number" min="0" name="usia" placeholder="Usia (Tahun)" class="single-input" required>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                    <select name="pendidikan" class="form-control single-input" required>
                        <option value=""> - Pendidikan Terakhir - </option>
                        @foreach ($options->where('tag', 'pendidikan')->all() as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                    <select name="jk" class="form-control single-input" required>
                        <option value=""> - Jenis Kelamin - </option>
                        @foreach ($options->where('tag', 'jk')->all() as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group mt-10">
                            <input type="text" name="nik" placeholder="Nomor KTP (NIK)" class="single-input" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_ktp[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group mt-10">
                            <input type="text" name="no_kk" placeholder="Nomor KK" class="single-input" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_kk[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <input type="number" min="1" name="jumlah_kk" placeholder="Jumlah KK dalam 1 rumah" class="single-input" required>
                </div>
                <div class="mt-10">
                    <textarea name="alamat" placeholder="Alamat Lengkap" class="single-textarea" required></textarea>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                    <select name="pekerjaan" class="form-control single-input" required>
                        <option value=""> - Pekerjaan Utama - </option>
                        @foreach ($options->where('tag', 'pekerjaan')->all() as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                    <select name="penghasilan" class="form-control single-input" required>
                        <option value=""> - Penghasilan atau pengeluaran per bulan - </option>
                        @foreach ($options->where('tag', 'penghasilan')->all() as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                    <select name="kepemilikan_tanah" class="form-control single-input" required>
                        <option value=""> - Status kepemilikan tanah - </option>
                        @foreach ($options->where('tag', 'kepemilikan_tanah')->all() as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                    <select name="kepemilikan_rumah" class="form-control single-input" required>
                        <option value=""> - Status kepemilikan rumah - </option>
                        @foreach ($options->where('tag', 'kepemilikan_rumah')->all() as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                    <select name="aset_rumah" class="form-control single-input" required>
                        <option value=""> - Aset rumah di tempat lain - </option>
                        @foreach ($options->where('tag', 'aset_rumah')->all() as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                    <select name="aset_tanah" class="form-control single-input" required>
                        <option value=""> - Aset tanah di tempat lain - </option>
                        @foreach ($options->where('tag', 'aset_tanah')->all() as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                    <select name="bantuan_perumahan" class="form-control single-input" required>
                        <option value=""> - Pernah mendapatkan bantuan perumahan - </option>
                        @foreach ($options->where('tag', 'bantuan_perumahan')->all() as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                    <select name="lokasi_rumah" class="form-control single-input" required>
                        <option value=""> - Jenis kawasan lokasi rumah yang di tempati - </option>
                        @foreach ($options->where('tag', 'lokasi_rumah')->all() as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-30" style="border-bottom: 0.5px solid #efefef;">
                    <h6>II. KONDISI FISIK RUMAH</h6>
                    <h6>A. ASPEK KESELAMATAN</h6>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                            <select name="pondasi" class="form-control single-input" required>
                                <option value=""> - Pondasi - </option>
                                @foreach ($options->where('tag', 'pondasi')->all() as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_pondasi[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                            <select name="kolom_balok" class="form-control single-input" required>
                                <option value=""> - Kondisi kolom dan balok - </option>
                                @foreach ($options->where('tag', 'kolom_balok')->all() as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_kolom_balok[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                            <select name="konstruksi_atap" class="form-control single-input" required>
                                <option value=""> - Kondisi konstruksi atap - </option>
                                @foreach ($options->where('tag', 'konstruksi_atap')->all() as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_konstruksi_atap[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="mt-30" style="border-bottom: 0.5px solid #efefef;">
                    <h6>B. ASPEK KESEHATAN</h6>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                            <select name="jendela" class="form-control single-input" required>
                                <option value=""> - Jendela/Lubang Cahaya - </option>
                                @foreach ($options->where('tag', 'jendela')->all() as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_jendela[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                            <select name="ventilasi" class="form-control single-input" required>
                                <option value=""> - Ventilasi - </option>
                                @foreach ($options->where('tag', 'ventilasi')->all() as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_ventilasi[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                            <select name="kamar_mandi" class="form-control single-input" required>
                                <option value=""> - Kepemilikan kamar mandi dan jamban - </option>
                                @foreach ($options->where('tag', 'kamar_mandi')->all() as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_kamar_mandi[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                            <select name="jarak_air" class="form-control single-input" required>
                                <option value=""> - Jarak sumber air minum ke TPA tinja - </option>
                                @foreach ($options->where('tag', 'jarak_air')->all() as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_jarak_air[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                            <select name="sumber_air" class="form-control single-input" required>
                                <option value=""> - Sumber air minum - </option>
                                @foreach ($options->where('tag', 'sumber_air')->all() as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_sumber_air[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                            <select name="sumber_listrik" class="form-control single-input" required>
                                <option value=""> - Sumber Listrik - </option>
                                @foreach ($options->where('tag', 'sumber_listrik')->all() as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_sumber_listrik[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="mt-30" style="border-bottom: 0.5px solid #efefef;">
                    <h6>C. ASPEK PERSYARATAN LUAS DAN KEBUTUHAN RUANG</h6>
                </div>
                <div class="mt-10">
                    <input type="text" name="luas_rumah" placeholder="Luas Rumah (per meter persegi)" class="single-input" required>
                </div>
                <div class="mt-10">
                    <input type="number" min="1" name="jumlah_penghuni" placeholder="Jumlah Penghuni (Orang)" class="single-input" required>
                </div>
                <div class="mt-30" style="border-bottom: 0.5px solid #efefef;">
                    <h6>D. ASPEK KOMPONEN BAHAN BANGUNAN SESUAI KONTEKS LOKAL</h6>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                            <select name="material_atap" class="form-control single-input" required>
                                <option value=""> - Material atap terluas - </option>
                                @foreach ($options->where('tag', 'material_atap')->all() as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_material_atap[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                            <select name="kondisi_atap" class="form-control single-input" required>
                                <option value=""> - Kondisi atap - </option>
                                @foreach ($options->where('tag', 'kondisi_atap')->all() as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_kondisi_atap[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                            <select name="material_dinding" class="form-control single-input" required>
                                <option value=""> - Material dinding terluas - </option>
                                @foreach ($options->where('tag', 'material_dinding')->all() as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_material_dinding[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                            <select name="kondisi_dinding" class="form-control single-input" required>
                                <option value=""> - Kondisi Dinding - </option>
                                @foreach ($options->where('tag', 'kondisi_dinding')->all() as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_kondisi_dinding[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                            <select name="material_lantai" class="form-control single-input" required>
                                <option value=""> - Material lantai terluas - </option>
                                @foreach ($options->where('tag', 'material_lantai')->all() as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_material_lantai[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                            <select name="kondisi_lantai" class="form-control single-input" required>
                                <option value=""> - Kondisi lantai - </option>
                                @foreach ($options->where('tag', 'kondisi_lantai')->all() as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-images" aria-hidden="true"></i></div>
                            <input type="text" placeholder="Foto" class="single-input foto-trigger" readonly required>
                            <input type="file" name="foto_kondisi_lantai[]" class="foto" multiple>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <button type="submit" class="genric-btn info radius">Submit</button>
                </div>
            </form>
          </div>  
        </div>
    </div>


    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script>
        $(function() {
            //input file function
            $('.foto-trigger').click(function() {
                element = $(this);
                fotoInput = element.next();

                //pop upload dialog
                fotoInput.click();

                fotoInput.change(function() {
                    files = $(this).get(0).files;
                    if(files.length > 0){
                        element.val(files.length + ' Foto');
                    }else{
                        element.val('');
                    }
                    fotoInput.off('change');
                });
            });

            $('.lokasi').click(function() {
                if(confirm('Browser akan meminta izin lokasi device anda, disarankan untuk menggunakan hp untuk akurasi yang lebih baik. Lanjutkan ?')){
                    var options = {
                        enableHighAccuracy: true,
                        timeout: 5000,
                        maximumAge: 0
                    };

                    function success(pos) {
                        var crd = pos.coords;

                        // console.log('Your current position is:');
                        // console.log(`Latitude : ${crd.latitude}`);
                        // console.log(`Longitude: ${crd.longitude}`);
                        // console.log(`More or less ${crd.accuracy} meters.`);

                        $('input[name="lat"]').val(crd.latitude);
                        $('input[name="lng"]').val(crd.longitude);
                    }

                    function error(err) {
                        // console.warn(`ERROR(${err.code}): ${err.message}`);
                        alert('Gagal mendapatkan lokasi device, coba beberapa saat lagi');
                    }

                    navigator.geolocation.getCurrentPosition(success, error, options);
                }
            });

            // $('button').click(function(e) {
            //     e.preventDefault();
                // if(confirm('Proses upload foto memerlukan waktu beberapa menit tergantung jumlah foto, jangan refresh atau tutup browser selama proses berlangsung. Lanjutkan ?')){
                //     $('form').submit();
                // }
            // });

        });
    </script>
</body>
</html>