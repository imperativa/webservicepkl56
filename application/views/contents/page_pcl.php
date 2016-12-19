<!-- Page Content -->
<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Monitoring Pencacah</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Informasi Pencacah
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-2">
                            <p> Nama kortim </p> 
                            <br>
                            <p> NIM pencacah </p>
                            <br>
                            <p> Nama pencacah </p>
                            <br>
                            <p> Kelas pencacah </p>
                            <br>
                            <p> Blok sensus </p>
                            <br>
                            <p> Berhasil di cacah </p>
                            <br>
                            <p> Belum di cacah </p>
                            <br>
                            <p> Revisi </p>
                            <br> 
                            <p> Alamat penginapan </p>
                            <br>
                            <p> No. HP </p>
                            <br>
                        </div>
                        
                        <div class="col-lg-10">
                            <p>: <?php echo $detail['Nama kortim'] ?> </p> 
                            <br>
                            <p>: <?php echo $detail['NIM pencacah'] ?> </p>
                            <br>
                            <p>: <?php echo $detail['Nama pencacah'] ?> </p>
                            <br>
                            <p>: <?php echo $detail['Kelas pencacah'] ?> </p>
                            <br>
                            <p>: <?php echo $detail['Blok sensus'] ?> </p>
                            <br>
                            <p>: <?php echo $detail['Berhasil di cacah'] ?> kuesioner</p>
                            <br>
                            <p>: <?php echo $detail['Belum di cacah'] ?> kuesioner</p>
                            <br>
                            <p>: <?php echo $detail['Revisi'] ?> kuesioner</p>
                            <br> 
                            <p>: <?php echo $detail['Alamat penginapan'] ?></p>
                            <br>
                            <p>: <?php echo $detail['No. HP'] ?></p>
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
                    Lokasi PCL
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