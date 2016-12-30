    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('resources/vendor/raphael/raphael.min.js')?>"></script>
    <script src="<?php echo base_url('resources/vendor/morrisjs/morris.min.js')?>"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $.ajax({
                url: '<?php echo base_url('server/get_list_modul') ?>',
                type: 'GET',
                dataType: 'json',
                success: function(result) {
                    $.each(result['data'], function(key, item){
                        $('#select_modul').append($('<option>', {
                            value : item['id'],
                            text : item['nama'] + " (" + item['tema'] + ")",
                        }));
                    });
                }
            });
        });

        $('#select_modul').change(function () {
            var modul = $(this).val();
            $.ajax({
                url: '<?php echo base_url('server/get_list_variabel/') ?>' + modul,
                type: 'GET',
                dataType: 'json',
                success: function(result) {
                    $('#select_variabel').empty();
                    $.each(result['data'], function(key, item){
                        $('#select_variabel').append($('<option>', {
                            value : item['id'],
                            text : item['nama']
                        }));
                    });
                }
            });
        });

    	$(function() {
    		Morris.Bar({
		        element: 'morris-bar-chart',
		        data: [{
		            y: '1',
		            a: 100
		        }, {
		            y: '2',
		            a: 75
		        }, {
		            y: '3',
		            a: 50
		        }],
		        xkey: 'y',
		        ykeys: ['a'],
		        labels: ['Persentase Progres Pencacahan'],
		        hideHover: 'auto',
		        resize: true
		    });
		});
    </script>
