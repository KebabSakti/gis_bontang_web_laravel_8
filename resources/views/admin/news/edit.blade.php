<form method="POST" action="{{ route('news.update', $data->id) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="image" value="{{$data->image}}">
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
        <div class="col-md-6 col-sm-6 ">
            <a href="{{ asset('foto/' . $data->image) }}" data-fancybox="gallery">
                <img src="{{ asset('foto/' . $data->image) }}" width="100" class="img-thumbnail">
             </a>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Gambar</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="file" class="form-control" name="foto">
            <small class="form-text text-muted">Kosongkan jika tidak mengganti gambar</small>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Judul</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" name="title" value="{{$data->title}}" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Tag</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" name="tag" value="{{$data->tag}}" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Konten</label>
        <div class="col-md-6 col-sm-6 ">
            <textarea name="content" class="form-control" cols="30" rows="10" required>{{$data->content}}</textarea>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>