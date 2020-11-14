@extends('public.layout.base')

@section('content')
    
<main>
    <div class="container box_1170 pt-30 pb-100">
        <h3 class="text-heading">Peta</h3><hr>
        <div>
            <div id="map" style="height: 600px;"></div>
        </div>
    </div>
</main>

@endsection

@push('scripts')
<script>
    $(function() {

        var map = L.map('map').setView([0.570904, 116.427959], 8);
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        $.post('peta', {_token : '{!! csrf_token() !!}'}, function(data) {
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

            //add marker
            for(i = 0; i < data.forms.length; i++) {
                d = data.forms[i];
                latLng = L.latLng(d.lat, d.lng);
                popContent = 'Nama : ' + d.nama_lengkap + 
                             '<br> Kecamatan : ' + d.kecamatan;

                marker = L.marker(latLng).addTo(map).bindPopup(popContent);
                marker.on('click', function(e) {
                    this.openPopup();
                });

                bounds.push(latLng);
            }

            //fit all marker inside view
            map.fitBounds(bounds);
        });
    });
</script>
@endpush