<!-- DataTables -->
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.bootstrap.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.responsive.min.js')?>"></script>

<!-- Google Map Script -->
<script src="http://maps.google.com/maps/api/js?libraries=geometry&v=3.7&key=AIzaSyDQFjRggMlnBZO62jcu0-awkKaSiA50kho&libraries=places"></script>
<script src="<?php echo base_url('resources/vendor/google-map/maplace.js');?>"></script>

<script type="text/javascript">
    var table;

    /* Formatting function for row details - modify as you need */
    function format (data) {
        return '<div class="panel panel-default">' +
            '<div class="panel-heading">' +
                'Detail Masalah' +
            '</div>' +
            '<div class="panel-body">' +
                '<div class="row" style="margin-top:10px">' +
                    '<div class="col-lg-3">' +
                        '<b>Keterangan:</b>' +
                    '</div>' +
                    '<div class="col-lg-9">' +
                        data.keterangan +
                    '</div>' +
                '</div>' +
                '<div class="row" style="margin-top:10px">' +
                    '<div class="col-lg-3">' +
                        '<b>Nomor Perangkat:</b>' +
                    '</div>' +
                    '<div class="col-lg-9">' +
                        data.nomor_perangkat +
                    '</div>' +
                '</div>' +
                '<div class="row" style="margin-top:10px">' +
                    '<div class="col-lg-3">' +
                        '<b>Nomor Lain:</b>' +
                    '</div>' +
                    '<div class="col-lg-9">' +
                        data.nomor_lain +
                    '</div>' +
                '</div>' +
                '<div class="row" style="margin-top:10px">' +
                    '<div class="col-lg-3">' +
                        '<b>Gambar:</b>' +
                    '</div>' +
                    '<div class="col-lg-9">' +
                        '<img src="' + data.gambar + '" style="width: 300px; height:300px;">' +
                    '</div>' +
                '</div>' +
                '<div class="row" style="margin-top:10px">' +
                    '<div class="col-lg-3">' +
                        '<b>Lokasi:</b>' +
                    '</div>' +
                    '<div class="col-lg-9">' +
                        '<div id="detail_map" style="width: 100%; height: 400px;"></div>' +
                    '</div>' +
                '</div>' +
            '</div>' +
        '</div>';
    }

    $(document).ready(function() {
        table = $('#table_monitoring').DataTable({
            ajax: '<?php echo base_url() ?>' + 'server/get_list_masalah', // CHANGE ME
            columns: [
                {
                    "className": 'details-control',
                    "orderable": false,
                    "data": null,
                    "defaultContent": ''
                },
                {"data": "nama"},
                {"data": "judul"},
                {"data": "waktu"},
                {
                    "className": "dt-body-center",
                    "data": "status"
                }
            ],
            order: [[1, 'asc']],
            responsive: true
        });

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

        // Add event listener for opening and closing details
        $('#table_monitoring tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row(tr);
            var data = row.data();
            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Close all other row then open this row
                table.rows().every(function (rowIdx, tableLoop, rowLoop) {
                    this.child.hide();
                    $('tr.shown').removeClass('shown');
                });
                row.child(format(data)).show();
                if (!map) {
                    var map = new google.maps.Map(document.getElementById('detail_map'), {
                        zoom: 10,
                        center: {lat: -2.7410513, lng: 106.4405872},
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    });
                }
                var center = {lat: parseInt(data.lokasi_lat), lng: parseInt(data.lokasi_long)};
                map.setCenter(center);
                tr.addClass('shown');
            }
        });
    });

    $('#reload').click(function () {
        table.ajax.reload();
    })

</script>
