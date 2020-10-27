@extends('public.layout.base')

@section('content')
    
<main>
    <div class="container box_1170 pt-30 pb-100">
        <h3 class="text-heading">Agenda</h3><hr>
        <div>
            <table class="table table-bordered table-hover datatable" style="font-size: 0.6em;">
                <thead>
                    <tr>
                        <th>Penanggung Jawab</th>
                        <th>Lokasi Acara</th>
                        <th>Agenda</th>
                        <th>Tanggal Post</th>
                        <th>Tanggal Update</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection

@push('scripts')
<script>
$(function() {
    var table;

    function loadData() {
        table = $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            order: [[4, "desc"]],
            ajax: $.fn.dataTable.pipeline({
                url: '{!! route('publicpagecontroller.agenda') !!}',
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