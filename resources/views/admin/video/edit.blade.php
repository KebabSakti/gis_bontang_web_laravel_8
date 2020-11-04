<form method="POST" action="{{ route('video.update', $data->id) }}" data-parsley-validate class="form-horizontal form-label-left">
    @csrf
    @method('PUT')
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Judul</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control " name="title" value="{{$data->title}}" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Deskripsi</label>
        <div class="col-md-6 col-sm-6 ">
            <textarea name="caption" class="form-control" cols="30" rows="10">{{$data->caption}}</textarea>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Link</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control " name="link" placeholder="contoh : https://www.youtube.com/watch?v=2X8O8PN7GOQ" value="{{$data->link}}" required>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>

</form>