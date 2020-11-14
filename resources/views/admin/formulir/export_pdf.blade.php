<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

h1 {
  text-align: center;
}

</style>
</head>
<body>
<h1>Pendataan Rumah Tidak Layak Huni</h1>
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
          <th>Usia (Tahun)</th>
          <th>Pendidikan Terakhir</th>
          <th>Jenis Kelamin</th>
          <th>Alamat Lengkap</th>
          <th>Nomor KTP (NIK)</th>
          <th>Nomor KK</th>
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
            <td>{{$item->usia}}</td>
            <td>{{$item->pendidikan}}</td>
            <td>{{$item->jk}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->nik}}</td>
            <td>{{$item->no_kk}}</td>
      @endforeach
  </tbody>
</table>