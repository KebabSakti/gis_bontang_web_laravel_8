<form method="POST" action="{{ route('news.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Gambar</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="file" class="form-control" name="foto" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Judul</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" name="title" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Tag</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" name="tag" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Konten</label>
        <div class="col-md-6 col-sm-6 ">
            <textarea name="content" class="form-control" cols="30" rows="10" required></textarea>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>