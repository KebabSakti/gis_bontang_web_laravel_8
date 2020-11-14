@extends('admin.layout.base')

@section('content')

   <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Peta</h3>
          <br>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Peta</h2>
              <div class="float-right">
                <button type="button" class="btn btn-primary save-map">Simpan</button>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div id="map" style="height: 600px;"></div>
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

        var map = L.map('map').setView([0.570904, 116.427959], 8);
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        $.post('map', {_token : '{!! csrf_token() !!}'}, function(data) {
            var bounds = [];

            //add saved geoJSON and draw control
            // Variable to store editable layers
            var drawnItems = new L.geoJSON();

            if(data.polies.length > 0){
              drawnItems = L.geoJSON(JSON.parse(data.polies[0].content),
                {
                  onEachFeature : function(feature, layer) {
                    //add text to drawned item
                    // layer.bindTooltip("SUPPPPP", {'permanent': false, 'interactive': true});

                    // layer.bindPopup('Hello');
                  }
                }
              );
            }

            //add layer to map
            map.addLayer(drawnItems);

            //hold draw control option
            var drawControl = new L.Control.Draw({
                draw : {
                  marker : false,
                  circle : false,
                },
                edit: {
                    featureGroup: drawnItems
                }
            });

            //add draw control to map
            map.addControl(drawControl);

            //add marker
            for(i = 0; i < data.forms.length; i++) {
                d = data.forms[i];
                latLng = L.latLng(d.lat, d.lng);
                popContent = 'Nama : ' + d.nama_lengkap + 
                             '<br> Kecamatan : ' + d.kecamatan +
                             '<br> NIK : ' + d.nik +
                             '<br> No KK : ' + d.no_kk +
                             '<br><br> <a href="javascript:;" class="modal-trigger" data-target="formulir/'+d.id+'">Detail</a>';

                marker = L.marker(latLng).addTo(map).bindPopup(popContent);
                marker.on('click', function(e) {
                    this.openPopup();
                });

                bounds.push(latLng);
            }

            //fit all marker inside view
            map.fitBounds(bounds);

            //event on created poly
            map.on('draw:created', function(event) {
                var layer = event.layer;
                drawnItems.addLayer(layer);
            });

            $('.save-map').click(function() {
                $.post('map/save', {
                  _token : '{!! csrf_token() !!}',
                  content : JSON.stringify(drawnItems.toGeoJSON()),
                }, function(data) {
                  alert('Data berhasil tersimpan');
                  window.location.reload();
                });
            });
        });
    });
</script>
@endpush