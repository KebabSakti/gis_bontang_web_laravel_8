<form method="POST" action="{{ route('auth.admin.update', ['id' => $data->id]) }}" data-parsley-validate class="form-horizontal form-label-left">
    @csrf
    @method('PUT')
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" name="name" value="{{$data->name}}" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" name="email" value="{{$data->email}}" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="password" class="form-control" name="password" value="">
            <small class="form-text text-muted">* Kosongkan jika tidak mengganti password</small>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>

</form>