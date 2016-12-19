<!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url()?>resources/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/morrisjs/morris.min.js"></script>

    <script type="text/javascript">
    	$(function() {
    		Morris.Bar({
		        element: 'morris-bar-chart',
		        data: [{
		            y: 'B',
		            a: 100
		        }, {
		            y: 'BB',
		            a: 75
		        }, {
		            y: 'BS',
		            a: 50
		        }, {
		            y: 'BT',
		            a: 75
		        }, {
		            y: 'Bl',
		            a: 50
		        }, {
		            y: 'BlT',
		            a: 75
		        }, {
		            y: 'PP',
		            a: 100
		        }],
		        xkey: 'y',
		        ykeys: ['a'],
		        labels: ['Persentase Progres Pencacahan'],
		        hideHover: 'auto',
		        resize: true
		    });
		});
    </script>