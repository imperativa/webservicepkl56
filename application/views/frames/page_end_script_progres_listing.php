    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('resources/vendor/raphael/raphael.min.js')?>"></script>
    <script src="<?php echo base_url('resources/vendor/morrisjs/morris.min.js')?>"></script>

    <script type="text/javascript">
        var chart = null;
        function get_agregat_data(parameter) {
            // CHANGE ME
            var url = '<?php echo base_url() ?>' + 'server/get_agregat/build_susenas_kor_1481356172_core' + parameter;
            console.log(url);
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function(result) {
                    if (chart === null) {
                        console.log("pertama");
                        chart = Morris.Bar({
                            element: 'morris-bar-chart',
                            data : result['data'],
                            xkey: 'wilayah',
                            ykeys: ['jumlah'],
                            labels: ['Jumlah Listing'],
                            hideHover: 'auto',
                            resize: true
                        });
                    } else {
                        console.log("kedua");
                        if (result['data'].length == 0) {
                            console.log('belum ada data');
                        } else {
                            chart.setData(result['data']);
                        }
                    }
                }
            });
        }

    	$(document).ready(function() {
            // Inisiasi select option kabupaten dan kecamatan
            var url = '<?php echo base_url() ?>' + 'server/get_list_kabupaten';
            var init = '<?php echo $id_kabupaten ?>';
            get_select_data("#select_kabupaten", url, init);
            var url2 = '<?php echo base_url() ?>' + 'server/get_list_kecamatan/' + init;
            get_select_data("#select_kecamatan", url2);
            
            // Inisiasi chart pertama
            if (init != null) {
                get_agregat_data("/" + init);
            }else {
                get_agregat_data("/01");
            }
		});

        // Get Data
        $('#btn_lihat').click(function () {
            var agregat_parameter = '';
            agregat_parameter += ($("#select_kabupaten").val() != null) ? "/" + $("#select_kabupaten").val() : '';
            agregat_parameter += ($("#select_kecamatan").val() != null) ? "/" + $("#select_kecamatan").val() : '';
            agregat_parameter += ($("#select_kelurahandesa").val() != null) ? "/" + $("#select_kelurahandesa").val() : '';
            agregat_parameter += ($("#select_bloksensus").val() != null) ? "/" + $("#select_bloksensus").val() : '';
            get_agregat_data(agregat_parameter);
        });
    </script>
