<form method="POST" action="{{ route('static.update', $data->id) }}" data-parsley-validate class="form-horizontal form-label-left">
    @csrf
    @method('PUT')
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Tag</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control " value="{{$data->tag}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Judul</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control " name="title" value="{{$data->title}}" required>
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