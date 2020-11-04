@extends('admin.layout.base')

@section('content')

  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Agenda</h3>
          <br>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>List Agenda</h2>
              <div class="float-right">
                <button type="button" data-target="{{ route('agenda.create') }}" class="btn btn-primary modal-trigger">Tambah Data</button>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content table-responsive">
                <table class="table table-bordered table-hover datatable">
                    <thead>
                        <tr>
                            <th>Penanggung Jawab</th>
                            <th>Lokasi Acara</th>
                            <th>Agenda</th>
                            <th>Tanggal Post</th>
                            <th>Tanggal Update</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection

@push('scripts')
<script>
$(function() {
    var table;

    function loadData() {
        table = $('.datatable').DataTable({
            processing: true,
            language: {
                processing: '<span style="color:#fff; font-weight:bold;">Memuat..</span>'
            },
            serverSide: true,
            columns:[
                null,
                null,
                {'searchable':true, 'orderable':false},
                {'searchable':false, 'orderable':true},
                {'searchable':false, 'orderable':true},
                {'searchable':false, 'orderable':false},
            ],
            order: [[3, "desc"]],
            ajax: $.fn.dataTable.pipeline({
                url: '{!! route('agenda.ajax') !!}',
                method: 'POST',
                data: function(d) {
                    d._token = '{!! csrf_token() !!}';
                },
                pages: 5,
            })
        });
    }
    
    loadData();

    table.on('search.dt', function() {
        search = table.search();
        $('input[name="search"]').val(search);
    });
});

</script>
@endpush