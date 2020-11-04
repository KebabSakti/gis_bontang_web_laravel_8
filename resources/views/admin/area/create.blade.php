<form method="POST" action="{{ route('area.store') }}" data-parsley-validate class="form-horizontal form-label-left">
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Kode</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" name="code" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tag</label>
        <div class="col-md-6 col-sm-6 ">
            <select name="tag" class="form-control" required>
                <option value=""> - Pilih Tag - </option>
                <option value="kelurahan">Desa/Kelurahan</option>
                <option value="kecamatan">Kecamatan</option>
                <option value="kabupaten">Kabupaten/Kota</option>
                <option value="provinsi">Provinsi</option>
            </select>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" name="name" required>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>