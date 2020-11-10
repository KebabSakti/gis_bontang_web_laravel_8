
<form method="" action="" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">DESA / KELURAHAN</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->kelurahan}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">KECAMATAN</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->kecamatan}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">KABUPATEN / KOTA</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->kabupaten}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">PROVINSI</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->provinsi}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">FOTO</label>
        <div class="col-md-6 col-sm-6 ">
            <a data-fancybox-trigger="form" data-fancybox-index="0" href="javascript:;" class="btn btn-info"><i class="fa fa-picture-o fa-fw"></i> Foto</a>
            @foreach ($data->fotos()->where('tag', 'form')->get() as $item)
                <a data-fancybox="form" href="{{ asset('foto/'.$item->foto) }}">
                    <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                </a>
            @endforeach
        </div>
    </div>
    <hr>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Urut</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->nomor_urut}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->nama_lengkap}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Usia (Tahun)</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->usia}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan Terakhir</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->pendidikan}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->jk}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat Lengkap</label>
        <div class="col-md-6 col-sm-6 ">
            <textarea class="form-control" cols="30" rows="5" readonly>{{$data->alamat}}</textarea>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Nomor KTP (NIK)</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->nik}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Jumlah KK dalam 1 rumah</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->jumlah_kk}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan Utama</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->pekerjaan}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Penghasilan atau pengeluaran per bulan</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->penghasilan}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Status kepemilikan tanah</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->kepemilikan_tanah}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Status kepemilikan rumah</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->kepemilikan_rumah}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Aset rumah di tempat lain</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->aset_rumah}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Aset tahah di tempat lain</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->aset_tanah}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Pernah mendapatkan bantuan perumahan</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->bantuan_perumahan}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis kawasan lokasi rumah yang ditempati</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->lokasi_rumah}}" readonly>
        </div>
    </div>
    <hr>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Pondasi</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->pondasi}}" readonly>
        </div>
        @if (count($data->fotos()->where('tag', 'pondasi')->get()) > 0)
            <div class="col-md-3 col-sm-3 ">
                <a data-fancybox-trigger="pondasi" data-fancybox-index="0" href="javascript:;" class="btn btn-info"><i class="fa fa-picture-o fa-fw"></i> Foto</a>
                @foreach ($data->fotos()->where('tag', 'pondasi')->get() as $item)
                    <a data-fancybox="pondasi" href="{{ asset('foto/'.$item->foto) }}">
                        <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Kondisi kolom dan balok</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->kolom_balok}}" readonly>
        </div>
        @if (count($data->fotos()->where('tag', 'kolom_balok')->get()) > 0)
            <div class="col-md-3 col-sm-3 ">
                <a data-fancybox-trigger="kolom_balok" data-fancybox-index="0" href="javascript:;" class="btn btn-info"><i class="fa fa-picture-o fa-fw"></i> Foto</a>
                @foreach ($data->fotos()->where('tag', 'kolom_balok')->get() as $item)
                    <a data-fancybox="kolom_balok" href="{{ asset('foto/'.$item->foto) }}">
                        <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Kondisi konstruksi atap</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->konstruksi_atap}}" readonly>
        </div>
        @if (count($data->fotos()->where('tag', 'konstruksi_atap')->get()) > 0)
            <div class="col-md-3 col-sm-3 ">
                <a data-fancybox-trigger="konstruksi_atap" data-fancybox-index="0" href="javascript:;" class="btn btn-info"><i class="fa fa-picture-o fa-fw"></i> Foto</a>
                @foreach ($data->fotos()->where('tag', 'konstruksi_atap')->get() as $item)
                    <a data-fancybox="konstruksi_atap" href="{{ asset('foto/'.$item->foto) }}">
                        <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Jendela/Lubang cahaya</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->jendela}}" readonly>
        </div>
        @if (count($data->fotos()->where('tag', 'jendela')->get()) > 0)
            <div class="col-md-3 col-sm-3 ">
                <a data-fancybox-trigger="jendela" data-fancybox-index="0" href="javascript:;" class="btn btn-info"><i class="fa fa-picture-o fa-fw"></i> Foto</a>
                @foreach ($data->fotos()->where('tag', 'jendela')->get() as $item)
                    <a data-fancybox="jendela" href="{{ asset('foto/'.$item->foto) }}">
                        <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Ventilasi</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->ventilasi}}" readonly>
        </div>
        @if (count($data->fotos()->where('tag', 'ventilasi')->get()) > 0)
            <div class="col-md-3 col-sm-3 ">
                <a data-fancybox-trigger="ventilasi" data-fancybox-index="0" href="javascript:;" class="btn btn-info"><i class="fa fa-picture-o fa-fw"></i> Foto</a>
                @foreach ($data->fotos()->where('tag', 'jendela')->get() as $item)
                    <a data-fancybox="ventilasi" href="{{ asset('foto/'.$item->foto) }}">
                        <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Kepemilikan kamar mandi dan jamban</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->kamar_mandi}}" readonly>
        </div>
        @if (count($data->fotos()->where('tag', 'kamar_mandi')->get()) > 0)
            <div class="col-md-3 col-sm-3 ">
                <a data-fancybox-trigger="kamar_mandi" data-fancybox-index="0" href="javascript:;" class="btn btn-info"><i class="fa fa-picture-o fa-fw"></i> Foto</a>
                @foreach ($data->fotos()->where('tag', 'kamar_mandi')->get() as $item)
                    <a data-fancybox="kamar_mandi" href="{{ asset('foto/'.$item->foto) }}">
                        <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Jarak sumber air minum ke TPA tinja</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->jarak_air}}" readonly>
        </div>
        @if (count($data->fotos()->where('tag', 'jarak_air')->get()) > 0)
            <div class="col-md-3 col-sm-3 ">
                <a data-fancybox-trigger="jarak_air" data-fancybox-index="0" href="javascript:;" class="btn btn-info"><i class="fa fa-picture-o fa-fw"></i> Foto</a>
                @foreach ($data->fotos()->where('tag', 'jarak_air')->get() as $item)
                    <a data-fancybox="jarak_air" href="{{ asset('foto/'.$item->foto) }}">
                        <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Sumber air minum</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->sumber_air}}" readonly>
        </div>
        @if (count($data->fotos()->where('tag', 'sumber_air')->get()) > 0)
            <div class="col-md-3 col-sm-3 ">
                <a data-fancybox-trigger="sumber_air" data-fancybox-index="0" href="javascript:;" class="btn btn-info"><i class="fa fa-picture-o fa-fw"></i> Foto</a>
                @foreach ($data->fotos()->where('tag', 'sumber_air')->get() as $item)
                    <a data-fancybox="sumber_air" href="{{ asset('foto/'.$item->foto) }}">
                        <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Sumber listrik</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->sumber_listrik}}" readonly>
        </div>
        @if (count($data->fotos()->where('tag', 'sumber_listrik')->get()) > 0)
            <div class="col-md-3 col-sm-3 ">
                <a data-fancybox-trigger="sumber_listrik" data-fancybox-index="0" href="javascript:;" class="btn btn-info"><i class="fa fa-picture-o fa-fw"></i> Foto</a>
                @foreach ($data->fotos()->where('tag', 'sumber_listrik')->get() as $item)
                    <a data-fancybox="sumber_listrik" href="{{ asset('foto/'.$item->foto) }}">
                        <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    <hr>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Luas rumah (per meter persegi)</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->luas_rumah}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Jumlah penghuni (Orang)</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->jumlah_penghuni}}" readonly>
        </div>
    </div>
    <hr>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Material atap terluas</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->material_atap}}" readonly>
        </div>
        @if (count($data->fotos()->where('tag', 'material_atap')->get()) > 0)
            <div class="col-md-3 col-sm-3 ">
                <a data-fancybox-trigger="material_atap" data-fancybox-index="0" href="javascript:;" class="btn btn-info"><i class="fa fa-picture-o fa-fw"></i> Foto</a>
                @foreach ($data->fotos()->where('tag', 'material_atap')->get() as $item)
                    <a data-fancybox="material_atap" href="{{ asset('foto/'.$item->foto) }}">
                        <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Kondisi atap</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->kondisi_atap}}" readonly>
        </div>
        @if (count($data->fotos()->where('tag', 'kondisi_atap')->get()) > 0)
            <div class="col-md-3 col-sm-3 ">
                <a data-fancybox-trigger="kondisi_atap" data-fancybox-index="0" href="javascript:;" class="btn btn-info"><i class="fa fa-picture-o fa-fw"></i> Foto</a>
                @foreach ($data->fotos()->where('tag', 'kondisi_atap')->get() as $item)
                    <a data-fancybox="kondisi_atap" href="{{ asset('foto/'.$item->foto) }}">
                        <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Material dinding terluas</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->material_dinding}}" readonly>
        </div>
        @if (count($data->fotos()->where('tag', 'material_dinding')->get()) > 0)
            <div class="col-md-3 col-sm-3 ">
                <a data-fancybox-trigger="material_dinding" data-fancybox-index="0" href="javascript:;" class="btn btn-info"><i class="fa fa-picture-o fa-fw"></i> Foto</a>
                @foreach ($data->fotos()->where('tag', 'material_dinding')->get() as $item)
                    <a data-fancybox="material_dinding" href="{{ asset('foto/'.$item->foto) }}">
                        <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Kondisi dinding</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->kondisi_dinding}}" readonly>
        </div>
        @if (count($data->fotos()->where('tag', 'kondisi_dinding')->get()) > 0)
            <div class="col-md-3 col-sm-3 ">
                <a data-fancybox-trigger="kondisi_dinding" data-fancybox-index="0" href="javascript:;" class="btn btn-info"><i class="fa fa-picture-o fa-fw"></i> Foto</a>
                @foreach ($data->fotos()->where('tag', 'kondisi_dinding')->get() as $item)
                    <a data-fancybox="kondisi_dinding" href="{{ asset('foto/'.$item->foto) }}">
                        <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Material lantai terluas</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->material_lantai}}" readonly>
        </div>
        @if (count($data->fotos()->where('tag', 'material_lantai')->get()) > 0)
            <div class="col-md-3 col-sm-3 ">
                <a data-fancybox-trigger="material_lantai" data-fancybox-index="0" href="javascript:;" class="btn btn-info"><i class="fa fa-picture-o fa-fw"></i> Foto</a>
                @foreach ($data->fotos()->where('tag', 'material_lantai')->get() as $item)
                    <a data-fancybox="material_lantai" href="{{ asset('foto/'.$item->foto) }}">
                        <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Kondisi lantai</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" value="{{$data->kondisi_lantai}}" readonly>
        </div>
        @if (count($data->fotos()->where('tag', 'kondisi_lantai')->get()) > 0)
            <div class="col-md-3 col-sm-3 ">
                <a data-fancybox-trigger="kondisi_lantai" data-fancybox-index="0" href="javascript:;" class="btn btn-info"><i class="fa fa-picture-o fa-fw"></i> Foto</a>
                @foreach ($data->fotos()->where('tag', 'kondisi_lantai')->get() as $item)
                    <a data-fancybox="kondisi_lantai" href="{{ asset('foto/'.$item->foto) }}">
                        <img src="{{ asset('foto/'.$item->foto) }}" style="display: none;">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</form>
          