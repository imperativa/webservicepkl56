<!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('resources/vendor/raphael/raphael.min.js')?>"></script>
    <script src="<?php echo base_url('resources/vendor/morrisjs/morris.min.js')?>"></script>

    <script type="text/javascript">
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
        $.ajax({
            url: '',
            type: 'GET',
            dataType: 'json',
            success: function(result) {

            }
        });
    </script>
