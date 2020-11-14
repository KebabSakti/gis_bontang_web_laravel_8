<form method="POST" action="{{ route('formulir.exportsubmit') }}" data-parsley-validate class="form-horizontal form-label-left">
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Periode</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control export-rangepicker" name="periode" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Format</label>
        <div class="col-md-6 col-sm-6 ">
            <select name="format" class="form-control" required>
                <option value=""> - Pilih Format - </option>
                <option value="excel">Excel</option>
                <option value="pdf">PDF</option>
            </select>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <button type="submit" class="btn btn-success">Download</button>
        </div>
    </div>
</form>