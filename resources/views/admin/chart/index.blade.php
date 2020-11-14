@extends('admin.layout.base')

@section('content')

   <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Statistik</h3>
          <br>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Data Statistik</h2>
              <div class="d-flex flex-row-reverse bd-highlight">
                <div class="bd-highlight">
                    <select name="option" class="form-control">
                        <option value=""> - Pilih data yang akan di tampilkan - </option>
                        <option value="pendidikan">Pendidikan terakhir</option>
                        <option value="pekerjaan">Pekerjaan utama</option>
                        <option value="penghasilan">Penghasilan atau pengeluaran per bulan</option>
                        <option value="kepemilikan_tanah">Status kepemilikan tanah</option>
                        <option value="kepemilikan_rumah">Status kepemilikan rumah</option>
                        <option value="aset_rumah">Aset rumah di tempat lain</option>
                        <option value="aset_tanah">Aset tanah di tempat lain</option>
                        <option value="bantuan_perumahan">Pernah mendapatkan bantuan perumahan</option>
                        <option value="lokasi_rumah">Jenis kawasan lokasi rumah yang di tempati</option>
                        <option value="pondasi">Pondasi</option>
                        <option value="kolom_balok">Kondisi kolom dan balok</option>
                        <option value="konstruksi_atap">Kondisi konstruksi atap</option>
                        <option value="jendela">Jendela / Lubang cahaya</option>
                        <option value="ventilasi">Ventilasi</option>
                        <option value="kamar_mandi">Kepemilikan kamar mandi dan jamban</option>
                        <option value="jarak_air">Jarak sumber air minum ke TPA tinja</option>
                        <option value="sumber_air">Sumber air minum</option>
                        <option value="sumber_listrik">Sumber listrik</option>
                        <option value="material_atap">Material atap terluas</option>
                        <option value="kondisi_atap">Kondisi atap</option>
                        <option value="material_dinding">Material dinding terluas</option>
                        <option value="kondisi_dinding">Kondisi dinding</option>
                        <option value="material_lantai">Material lantai terluas</option>
                        <option value="kondisi_lantai">Kondisi lantai</option>
                    </select>
                </div>
                <div class="p-2 bd-highlight align-self-center loading" style="display: none;">
                    <strong>
                        Memuat data..
                    </strong>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <canvas id="bar"></canvas>
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
        var ctx = $('#bar');
        var chart;

        function random_rgba() {
            var o = Math.round, r = Math.random, s = 255;
            return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
        }

        function getRandomColors(total) {
            colors = [];
            for(i=0; i<total; i++){
                colors.push(random_rgba());
            }

            return colors;
        }

        function drawChart(type, label, data) {
            chart = new Chart(ctx, {
                type: type,
                data: {
                    labels: label,
                    datasets: [{
                        label: 'Total Data',
                        data: data,
                        backgroundColor: getRandomColors(label.length),
                        borderColor: getRandomColors(label.length),
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }

        //init empty chart
        drawChart('bar', [], []);

        $('select[name="option"]').change(function() {
            $('.loading').show();
            $.post('chart', {
                _token : '{!! csrf_token() !!}',
                tag : $(this).val(),
            }, function(data) {
                $('.loading').hide();

                chart.destroy();
                drawChart('bar', data.label, data.data);
            });
        });
    });
</script>
@endpush