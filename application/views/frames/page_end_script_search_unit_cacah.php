<!-- Google Map Script -->
<script src="http://maps.google.com/maps/api/js?libraries=geometry&v=3.7&key=AIzaSyDQFjRggMlnBZO62jcu0-awkKaSiA50kho&libraries=places"></script>

<script src="<?php echo base_url('resources/vendor/google-map/maplace.js');?>"></script>

<!-- User Script -->
<script>
    var map;
    var markers = [];
    var bounds = new google.maps.LatLngBounds();
    var infowindow = new google.maps.InfoWindow();

    $(document).ready(function () {
        // Inisiasi select option kabupaten dan kecamatan
        var url = '<?php echo base_url() ?>' + 'server/get_list_kabupaten';
        get_select_data("#select_kabupaten", url);
        // var url2 = '<?php echo base_url() ?>' + 'server/get_list_kecamatan/01';
        // get_select_data("#select_kecamatan", url2);

        // Inisiasi map
        map = new google.maps.Map(document.getElementById('gmap'), {
            zoom: 8,
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
        for (var i = 0; i < array_lokasi.length; i++) {
            var position = new google.maps.LatLng(array_lokasi[i]['lat'], array_lokasi[i]['lng']);
            // console.log(position);
            addMarkerWithTimeout(position, array_lokasi[i], i * 1000);
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

    function addInformation(info) {
        $('#info_nama').text(info['nama']);
        $('#info_alamat').text(info['alamat']);
        $('#info_nomor_utama').text(info['nomor_utama']);
        $('#info_nomor_lain').text(info['nomor_lain']);
    }

    function addMarkerWithTimeout(position, info, timeout) {
        window.setTimeout(function() {
            var marker = new google.maps.Marker({
                position: position,
                map: map,
                animation: google.maps.Animation.DROP,
                title: info['nama']
            });
          markers.push(marker);
          google.maps.event.addListener(marker,'click', (function(marker,info,infowindow){
              return function() {
                infowindow.setContent(info['nama']);
                $('#div_multiple').slideUp();
                addInformation(info);
                $('#div_info').slideDown();
                infowindow.open(map,marker);
                };
            })(marker,info,infowindow));
        }, timeout);
    }

    $('#form_search').submit(function (event) {
        var nama = $('#autocomplete').val();
        nama = encodeURIComponent(nama).replace(/[!'()*]/g, escape);
        var array_lokasi = [];
        $('#div_multiple').slideUp();
        $('#div_info').slideUp();
        $('#icon_search').attr('class', 'fa fa-spinner fa-spin');
        $.ajax({
            url: '<?php echo base_url('server/get_unit_cacah/') ?>' + nama,
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                console.log('found: ' + array_lokasi.length);
                $('#icon_search').attr('class', 'fa fa-search');
                if (result['data'].length != 0) {
                    if (result['data'].length == 1) {
                        $('#alert_success').fadeIn();
                        $('#alert_multiple').fadeOut();
                        $('#alert_notfound').fadeOut();
                        array_lokasi.push(result['data'][0]);
                        addInformation(result['data'][0]);
                        $('#div_info').slideDown();
                    } else { // Ada unit cacah yang memiliki nama sama
                        $('#alert_success').fadeOut();
                        $('#alert_multiple').fadeIn();
                        $('#alert_notfound').fadeOut();
                        $.each(result['data'], function (key, value) {
                            array_lokasi.push(value);
                        });
                        $('#div_multiple').slideDown();
                    }
                    drop_then_add(array_lokasi);
                }else {
                    map.setCenter({lat: -2.7410513, lng: 106.4405872});
                    $('#alert_success').fadeOut();
                    $('#alert_multiple').fadeOut();
                    $('#alert_notfound').fadeIn();
                }
            }
        });
        event.preventDefault();
    });

    $('#btn_cari').click(function () {
        $('#autocomplete').val('');
        var parameter_cari = '';
        parameter_cari += ($("#select_kabupaten").val() != null) ? "/" + $("#select_kabupaten").val() : '';
        parameter_cari += ($("#select_kecamatan").val() != null) ? "/" + $("#select_kecamatan").val() : '';
        parameter_cari += ($("#select_kelurahandesa").val() != null) ? "/" + $("#select_kelurahandesa").val() : '';
        parameter_cari += ($("#select_bloksensus").val() != null) ? "/" + $("#select_bloksensus").val() : '';
        var array_lokasi = [];
        $('#div_multiple').slideUp();
        $('#div_info').slideUp();
        $('#icon_search').attr('class', 'fa fa-spinner fa-spin');
        $.ajax({
            url: '<?php echo base_url('server/get_list_unit_cacah/') ?>' + parameter_cari,
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                console.log('found: ' + array_lokasi.length);
                $('#icon_search').attr('class', 'fa fa-search');
                if (result['data'].length != 0) {
                    if (result['data'].length == 1) {
                        $('#alert_success').fadeIn();
                        $('#alert_multiple').fadeOut();
                        $('#alert_notfound').fadeOut();
                        array_lokasi.push(result['data'][0]);
                        addInformation(result['data'][0]);
                        $('#div_info').slideDown();
                    } else { // Ada unit cacah yang memiliki nama sama
                        $('#alert_success').fadeOut();
                        $('#alert_multiple').fadeIn();
                        $('#alert_notfound').fadeOut();
                        $.each(result['data'], function (key, value) {
                            array_lokasi.push(value);
                        });
                        $('#div_multiple').slideDown();
                    }
                    drop_then_add(array_lokasi);
                }else {
                    map.setCenter({lat: -2.7410513, lng: 106.4405872});
                    $('#alert_success').fadeOut();
                    $('#alert_multiple').fadeOut();
                    $('#alert_notfound').fadeIn();
                }
            }
        });
    });
</script>
