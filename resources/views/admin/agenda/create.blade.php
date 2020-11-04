<form method="POST" action="{{ route('agenda.store') }}" data-parsley-validate class="form-horizontal form-label-left">
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Penanggung Jawab</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" name="author" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Lokasi Acara</label>
        <div class="col-md-6 col-sm-6 ">
            <textarea name="location" class="form-control" cols="30" rows="5" required></textarea>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Agenda</label>
        <div class="col-md-6 col-sm-6 ">
            <textarea name="agenda" class="form-control" cols="30" rows="10" required></textarea>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>