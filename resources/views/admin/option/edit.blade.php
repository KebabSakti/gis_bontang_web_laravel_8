<form method="POST" action="{{ route('option.update', $data->id) }}" data-parsley-validate class="form-horizontal form-label-left">
    @csrf
    @method('PUT')
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Tag</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control " value="{{$data->tag}}" readonly>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control " name="name" value="{{$data->name}}" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
        <div class="col-md-6 col-sm-6 ">
            <select name="active" class="form-control">
                @php
                    $status = [
                        'Aktif' => 1,
                        'Non Aktif' => 0,
                    ];
                @endphp
                @foreach ($status as $key => $value)
                    @php
                        $c = $data->active == $value ? 'selected':'';
                    @endphp
                    <option value="{{$value}}" {{$c}}>{{$key}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>

</form>