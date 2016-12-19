	<!-- google-map -->
 	<script src="http://maps.google.com/maps/api/js?libraries=geometry&v=3.7&key=AIzaSyDQFjRggMlnBZO62jcu0-awkKaSiA50kho&libraries=places"></script>

    <script src="<?php echo base_url(); ?>resources/vendor/google-map/maplace.js"></script>

	<script type="text/javascript">
	    <?php 
	    $js_array = json_encode($LocsG);
	    echo "var js_array = ".$js_array.";\n";
	    ?>
	    var LocsG =[];
	    for (var i = js_array.length - 1; i >= 0; i--) {
	        LocsG.push(js_array[i]);
	    }
	    console.log(LocsG);
	</script>
	<script>
	    //ul list example
	    new Maplace({
	        locations: LocsG,
	        map_div: '#gmap',
	        controls_type: '',
	        controls_title: ''
	    }).Load();
	</script>