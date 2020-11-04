<form method="POST" action="" data-parsley-validate class="form-horizontal form-label-left">
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control " name="title" value="{{$data->name}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">No. Telp</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control " name="title" value="{{$data->phone}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Subjek</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control " name="title" value="{{$data->subject}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Pesan</label>
        <div class="col-md-6 col-sm-6 ">
            <textarea name="caption" class="form-control" cols="30" rows="10" readonly>{{$data->messages}}</textarea>
        </div>
    </div>
</form>