<!-- Countdown CSS -->
<link href="<?php echo base_url('resources/css/countdown.css')?>" rel="stylesheet">
<!-- Progress Bar JavaScript -->
<script type="text/javascript" src="<?php echo base_url('resources/vendor/progressbar/dist/progressbar.js')?>"></script>

<script type="text/javascript">
    // progressbar.js@1.0.0 version is used
    // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
    var bar = new ProgressBar.Circle(progress_bar, {
      color: '#aaa',
      // This has to be the same size as the maximum width to
      // prevent clipping
      strokeWidth: 15,
      trailWidth: 1,
      easing: 'easeInOut',
      duration: 1500,
      text: {
        autoStyleContainer: false
      },
      from: { color: '#FF0000', width: 10 },
      to: { color: '#7FFF00', width: 10 },
      // Set default step function for all animate calls
      step: function(state, circle) {
        circle.path.setAttribute('stroke', state.color);
        circle.path.setAttribute('stroke-width', state.width);

        var value = (circle.value());
        if (value === 0) {
          circle.setText('');
        } else {
          circle.setText('<h1>'+Math.round(value*1000)+'<small>/1000</small></h1><h3>unit cacah</h3>');//---->ganti tulisan
        }

      }
    });
    bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
    bar.text.style.fontSize = '4rem';

    bar.animate(0);  // Progress Number from 0.0 to 1.0

    var bar2 = new ProgressBar.Circle(progress_listing, {
      color: '#aaa',
      // This has to be the same size as the maximum width to
      // prevent clipping
      strokeWidth: 15,
      trailWidth: 1,
      easing: 'easeInOut',
      duration: 1500,
      text: {
        autoStyleContainer: false
      },
      from: { color: '#FF0000', width: 10 },
      to: { color: '#7FFF00', width: 10 },
      // Set default step function for all animate calls
      step: function(state, circle) {
        circle.path.setAttribute('stroke', state.color);
        circle.path.setAttribute('stroke-width', state.width);

        var value = (circle.value());
        if (value === 0) {
          circle.setText('');
        } else {
          circle.setText('<h1>'+Math.round(value*1000)+'<small>/1000</small></h1><h3>unit cacah</h3>');//---->ganti tulisan
        }

      }
    });
    bar2.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
    bar2.text.style.fontSize = '4rem';

    bar2.animate(0);  // Progress Number from 0.0 to 1.0

      function checkProgresCacah(kuesioner) {
        $.ajax({
            url: "<?php echo base_url('server/get_agregat/') ?>" + kuesioner,
            type: "GET",
            dataType: "json",
            success: function(result) {
                bar.animate(result['total'] / 1000); // CHANGE ME
                $('#unit_listing').text(result['total']);
                console.log(result);
            }

        });
      setTimeout(checkProgresCacah, 5000, kuesioner);
    }

    function checkProgresListing(kuesioner) {
        $.ajax({
            url: "<?php echo base_url('server/get_agregat/') ?>" + kuesioner,
            type: "GET",
            dataType: "json",
            success: function(result) {
                bar2.animate(result['total'] / 1000); // CHANGE ME
                console.log(result);
            }
        });
      setTimeout(checkProgresListing, 5000, kuesioner);
    }

    $(document).ready(function(){
        var kuesioner_listing = 'build_susenas_kor_1481356172_core'; // CHANGE ME
        var kuesioner_cacah = 'build_susenas_kor_1481356172_core'; // CHANGE ME
        setTimeout(checkProgresListing, 1000, kuesioner_listing);
        setTimeout(checkProgresCacah, 1000, kuesioner_cacah);
    });
</script>

<script src="<?php echo base_url('resources/js/jquery.countdown.min.js')?>"></script>

<script type="text/javascript">
    $('#example').countdown({
        date: '2/13/2017 23:59:59' // CHANGE ME
    });
</script>
