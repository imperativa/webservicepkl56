<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">WELCOME ADMIN</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">

          <div class="col-lg-6">
            <div class="panel panel-default">
              <div class="panel-heading">Sisa Hari Pencacahan</div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8" id="progress_day"></div>
                  <div class="col-lg-2"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="panel panel-default">
              <div class="panel-heading">Progres Keseluruhan</div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8" id="progress_bar"></div>
                  <div class="col-lg-2"></div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<!-- Progress Bar JavaScript -->
<script type="text/javascript" src="<?php echo base_url()?>resources/vendor/progressbar/dist/progressbar.js"></script>

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
      duration: 1400,
      text: {
        autoStyleContainer: false
      },
      from: { color: '#FF0000', width: 10 },
      to: { color: '#7FFF00', width: 10 },
      // Set default step function for all animate calls
      step: function(state, circle) {
        circle.path.setAttribute('stroke', state.color);
        circle.path.setAttribute('stroke-width', state.width);

        var value = Math.round(circle.value() * 100);
        if (value === 0) {
          circle.setText('');
        } else {
          circle.setText('<h1>750<small>/1000</small></h1><h3>unit cacah</h3>');
        }

      }
    });
    bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
    bar.text.style.fontSize = '4rem';

    bar.animate(0.75);  // Progress Number from 0.0 to 1.0
</script>
<script type="text/javascript">
    // progressbar.js@1.0.0 version is used
    // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

    var bar = new ProgressBar.Circle(progress_day, {
      color: '#aaa',
      // This has to be the same size as the maximum width to
      // prevent clipping
      strokeWidth: 10,
      trailWidth: 1,
      easing: 'easeInOut',
      duration: 1400,
      text: {
        autoStyleContainer: false
      },
      from: { color: '#7FFF00', width: 10 },
      to: { color: '#FF0000', width: 10 },
      // Set default step function for all animate calls
      step: function(state, circle) {
        circle.path.setAttribute('stroke', state.color);
        circle.path.setAttribute('stroke-width', state.width);

        var value = Math.round(circle.value() * 100);
        if (value === 0) {
          circle.setText('');
        } else {
          circle.setText('<h1>4 Days</h1><h1><small> Left</small></h1>');
        }

      }
    });
    bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
    bar.text.style.fontSize = '4rem';

    bar.animate((3/7));  // Progress Number from 0.0 to 1.0
</script>

<!-- Timer JavaScript -->
<!-- <script src="<?php //echo base_url()?>resources/js/timer.js"></script> -->