<!-- Page Content -->
<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Unit Cacah</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
					<div class="row">
                        <div class="col-sm-9">
                            Informasi Unit Cacah
                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-link pull-right" id="reload"><i class="fa fa-refresh"></i></button>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <p> Kode kuesioner </p>
                            <br>
                            <p> Nama responden </p>
                            <br>
                            <p> Alamat responden </p>
                            <br>
                            <p> No Telf/HP responden </p>
                            <br>
                            <p> Kontak lain yang bisa dihubungi </p>
                            <br>

                        </div>

                        <div class="col-lg-9">
                            <p>: <?php echo $detail['Kode kuesioner'] ?> </p>
                            <br>
                            <p>: <?php echo $detail['Nama responden'] ?> </p>
                            <br>
                            <p>: <?php echo $detail['Alamat responden'] ?> </p>
                            <br>
                            <p>: <?php echo $detail['No Telf/HP responden'] ?> </p>
                            <br>
                            <p>: <?php echo $detail['Kontak lain yang bisa dihubungi'] ?> </p>
                            <br>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lokasi Unit Cacah
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="gmap" style="width: 100%; height: 400px;"></div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
