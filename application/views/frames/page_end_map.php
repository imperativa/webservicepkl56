	<!-- Google Map Script -->
 	<script src="http://maps.google.com/maps/api/js?libraries=geometry&v=3.7&key=AIzaSyDQFjRggMlnBZO62jcu0-awkKaSiA50kho&libraries=places"></script>

    <script src="<?php echo base_url('resources/vendor/google-map/maplace.js');?>"></script>

    <!-- User Script -->
	<script>
        var map;
        var markers = [];
        var bounds = new google.maps.LatLngBounds();

        $(document).ready(function () {
            map = new google.maps.Map(document.getElementById('gmap'), {
                zoom: 12,
                center: {lat: -2.7410513, lng: 106.4405872},
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var autocomplete_data = <?php echo json_encode($autocomplete) ?>; // Data autocomplete yang disediakan dari controller
            // console.log(autocomplete_data);
            $('#autocomplete').typeahead({
                source : autocomplete_data,
                fitToElement : true
            });
        });

        function clearMarkers() {
            for (var i = 0; i < markers.length; i++) {
              markers[i].setMap(null);
            }
            markers = [];
        }

        function drop_then_add(array_lokasi) {
            clearMarkers();
            // var position = new google.maps.LatLng(-2.7410513, 106.4405872);
            for (var i = 0; i < array_lokasi.length; i++) {
                var position = new google.maps.LatLng(array_lokasi[i]['lat'], array_lokasi[i]['lng']);
                var info = array_lokasi[i]['nama'];
                addMarkerWithTimeout(position, info, i * 500);
                bounds.extend(position);
                // google.maps.event.addListener(markers[i],'click', (function(marker,content,infowindow){
                //     return function() {
                //         infowindow.setContent(i);
                //         infowindow.open(map,marker);
                //     };
                // })(marker,content,infowindow));
            }
            map.fitBounds(bounds);
        }

        function addMarkerWithTimeout(position, info, timeout) {
            window.setTimeout(function() {
                var marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    title: info
                });
              markers.push(marker);
              var infowindow = new google.maps.InfoWindow();
            //   var infowindowcontent = $();
              console.log(info);
              google.maps.event.addListener(marker,'click', (function(marker,info,infowindow){
                  return function() {
                    infowindow.setContent("<div class='panel panel-default div-tes'><div class='panel-heading'>luqman</div><div class='panel-body'></div></div>");
                    // infowindow.setContent(infowindow.getContent());
                    infowindow.open(map,marker);
                    };
                })(marker,info,infowindow));
            }, timeout);
        }


        $('#form_search').submit(function (event) {
            var nama = $('#autocomplete').val();
            var array_lokasi = [];
            var lokasi;
            // console.log($('#autocomplete').val());
            $.ajax({
                url: 'http://localhost:3000/pcl', // Demo using db.json
                type: 'GET',
                dataType: 'json',
                success: function(result) {
                    $.each(result, function (key, value) {
                        lokasi = {'lat' : value['lat'], 'lng' : value['lng'], 'nama' : value['nama']};
                        array_lokasi.push(lokasi);
                    });
                    drop_then_add(array_lokasi);
                    console.log(array_lokasi);
                }
            });
            event.preventDefault();
        });

	</script>
