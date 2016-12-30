    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('resources/vendor/raphael/raphael.min.js')?>"></script>
    <script src="<?php echo base_url('resources/vendor/morrisjs/morris.min.js')?>"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url('resources/vendor/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('resources/vendor/datatables-plugins/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('resources/vendor/datatables-responsive/dataTables.responsive.js')?>"></script>

    <!-- Dynamic Table -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/jquery.dataTables.js')?>"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.bootstrap.js')?>"></script>
    <script src="<?php echo base_url('resources/js/dynamic_table_init.js')?>"></script>

    <script type="text/javascript">
    	$(document).ready(function() {
            $.ajax({
                // CHANGE ME
                url: '<?php echo base_url() ?>' + 'server/get_agregat/build_susenas_kor_1481356172_core',
                type: 'GET',
                dataType: 'json',
                success: function(result) {
                    // console.log(result);
                    // Initialize Chart
                    Morris.Bar({
        		        element: 'morris-bar-chart',
        		        data: result['data'],
        		        xkey: 'wilayah',
        		        ykeys: ['jumlah'],
        		        labels: ['Persentase Progres Pencacahan'],
        		        hideHover: 'auto',
        		        resize: true
        		    });

                    // Initialize Table
                    $('#dataTables-example').DataTable({
                        data: result['data'],
                        columns: [
                            {data: "wilayah"},
                            {data: "jumlah"},
                            {
                                data: "id" ,
                                render:function (data, type, full, meta) {
                                    return "<a href='"+ '<?php echo base_url('pkl/progres_cacah/')?>' + data + "'>" + "Lihat Detail" + "</a>";
                                }
                            },
                        ],
                        responsive: true,
                        bInfo: false,
                        bFilter: false,
                        bPaginate: false
                    });
                },
                error: function (result) {
                    console.log(result);
                }
            });
		});
    </script>
