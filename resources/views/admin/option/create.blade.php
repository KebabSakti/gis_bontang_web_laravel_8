<form method="POST" action="{{ route('option.store') }}" data-parsley-validate class="form-horizontal form-label-left">
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tag</label>
        <div class="col-md-6 col-sm-6 ">
            <select name="tag" class="form-control" required>
                <option value=""> - Pilih Tag - </option>
                <option value="pendidikan">Pendidikan Terakhir</option>
                <option value="jk">Jenis Kelamin</option>
                <option value="pekerjaan">Pekerjaan Utama</option>
                <option value="penghasilan">Penghasilan atau pengeluaran per bulan</option>
                <option value="kepemilikan_tanah">Status kepemilikan tanah</option>
                <option value="kepemilikan_rumah">Status kepemilikan rumah</option>
                <option value="aset_rumah">Aset Rumah</option>
                <option value="bantuan_perumahan">Pernah mendapatkan bantuan perumahan</option>
                <option value="lokasi_rumah">Jenis kawasan lokasi rumah yang ditempati</option>
                <option value="pondasi">Pondasi</option>
                <option value="kolom_balok">Kondisi kolom dan balok</option>
                <option value="jendela">Jendela/Lubang cahaya</option>
                <option value="ventilasi">Ventilasi</option>
                <option value="jarak_air">Jarak sumber air minum ke TPA tinja</option>
                <option value="sumber_air">Sumber air minum</option>
                <option value="sumber_listrik">Sumber listrik</option>
                <option value="material_atap">Material atap terluas</option>
                <option value="kondisi_atap">Kondisi atap</option>
                <option value="material_dinding">Material dinding terluas</option>
                <option value="kondisi_dinding">Kondisi dinding</option>
                <option value="material_lantai">Material lantai terluas</option>
                <option value="kondisi_lantai">Kondisi lantai</option>
            </select>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" required="required" class="form-control " name="name" required>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>

</form>