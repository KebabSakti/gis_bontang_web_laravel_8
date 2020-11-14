<table class="table table-bordered table-hover table-sm datatable-ajax" style="font-size: 0.6em;">
  <thead>
      <tr>
          <th>Timestamp</th>
          <th>Nama Surveyor</th>
          <th>Desa/Kelurahan</th>
          <th>Kecamatan</th>
          <th>Kabupaten/Kota</th>
          <th>Provinsi</th>
          <th>Nama Lengkap</th>
          <th>Kordinat (Latitude / Longitude)</th>
          <th>Usia (Tahun)</th>
          <th>Pendidikan Terakhir</th>
          <th>Jenis Kelamin</th>
          <th>Alamat Lengkap</th>
          <th>Nomor KTP (NIK)</th>
          <th>Foto KTP</th>
          <th>Nomor KK</th>
          <th>Foto KK</th>
          <th>Timestamp</th>
          <th>Jumlah KK</th>
          <th>Timestamp</th>
          <th>Pekerjaan Utama</th>
          <th>Penghasilan atau pengeluaran per bulan</th>
          <th>Status Kepemilikan Tanah</th>
          <th>Status Kepemilikan Rumah</th>
          <th>Aset Rumah di Tempat Lain</th>
          <th>Aset Tanah di Tempat Lain</th>
          <th>Pernah Mendapatkan Bantuan Perumahan</th>
          <th>Jenis kawasan lokasi rumah yang ditempati</th>
          <th>Pondasi</th>
          <th>Foto Pondasi</th>
          <th>Kondisi kolom dan balok</th>
          <th>Foto Kondisi kolom dan balok</th>
          <th>Kondisi konstruksi atap</th>
          <th>Foto Kondisi konstruksi atap</th>
          <th>Jendela/Lubang cahaya</th>
          <th>Foto Jendela/Lubang cahaya</th>
          <th>Ventilasi</th>
          <th>Foto Ventilasi</th>
          <th>Kepemilikan kamar mandi dan jamban</th>
          <th>Foto Kepemilikan kamar mandi dan jamban</th>
          <th>Jarak sumber air minum ke TPA tinja</th>
          <th>Foto Jarak sumber air minum ke TPA tinja</th>
          <th>Sumber air minum</th>
          <th>Foto Sumber air minum</th>
          <th>Sumber listrik</th>
          <th>Foto Sumber listrik</th>
          <th>Luas rumah (per meter persegi)</th>
          <th>Jumlah penghuni (Orang)</th>
          <th>Material atap terluas</th>
          <th>Foto Material atap terluas</th>
          <th>Kondisi atap</th>
          <th>Foto Kondisi atap</th>
          <th>Material dinding terluas</th>
          <th>Foto Material dinding terluas</th>
          <th>Kondisi dinding</th>
          <th>Foto Kondisi dinding</th>
          <th>Material lantai terluas</th>
          <th>Foto Material lantai terluas</th>
          <th>Kondisi lantai</th>
          <th>Foto Kondisi lantai</th>
      </tr>
  </thead>
  <tbody>
      @foreach ($data as $item)
        <tr>
            <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at, 'Asia/Kuala_Lumpur')->format('d/m/Y H:i:s')}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->kelurahan}}</td>
            <td>{{$item->kecamatan}}</td>
            <td>{{$item->kabupaten}}</td>
            <td>{{$item->provinsi}}</td>
            <td>{{$item->nama_lengkap}}</td>
            <td>{{$item->lat.' / '.$item->lng}}</td>
            <td>{{$item->usia}}</td>
            <td>{{$item->pendidikan}}</td>
            <td>{{$item->jk}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->nik}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/foto_ktp')}}</td>
            <td>{{$item->no_kk}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/foto_kk')}}</td>
            <td>{{$item->jumlah_kk}}</td>
            <td>{{$item->pekerjaan}}</td>
            <td>{{$item->penghasilan}}</td>
            <td>{{$item->kepemilikan_tanah}}</td>
            <td>{{$item->kepemilikan_rumah}}</td>
            <td>{{$item->aset_rumah}}</td>
            <td>{{$item->aset_tanah}}</td>
            <td>{{$item->bantuan_perumahan}}</td>
            <td>{{$item->lokasi_rumah}}</td>
            <td>{{$item->pondasi}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/pondasi')}}</td>
            <td>{{$item->kolom_balook}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/kolom_balok')}}</td>
            <td>{{$item->konstruksi_atap}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/konstruksi_atap')}}</td>
            <td>{{$item->jendela}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/jendela')}}</td>
            <td>{{$item->ventilasi}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/ventilasi')}}</td>
            <td>{{$item->kamar_mandi}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/kamar_mandi')}}</td>
            <td>{{$item->jarak_air}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/jarak_air')}}</td>
            <td>{{$item->sumber_air}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/sumber_air')}}</td>
            <td>{{$item->sumber_listrik}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/sumber_listrik')}}</td>
            <td>{{$item->luas_rumah}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/luas_rumah')}}</td>
            <td>{{$item->jumlah_penghuni}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/jumlah_penghuni')}}</td>
            <td>{{$item->material_atap}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/material_atap')}}</td>
            <td>{{$item->kondisi_atap}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/kondisi_atap')}}</td>
            <td>{{$item->material_dinding}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/material_dinding')}}</td>
            <td>{{$item->kondisi_dinding}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/kondisi_dinding')}}</td>
            <td>{{$item->material_lantai}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/material_lantai')}}</td>
            <td>{{$item->kondisi_lantai}}</td>
            <td>{{secure_url('user/form/'.$item->form_id.'/detail/kondisi_lantai')}}</td>
        </tr>
      @endforeach
  </tbody>
</table>