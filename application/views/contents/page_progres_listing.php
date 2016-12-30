<!-- Page Content -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Progres Listing</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Pilih Lokasi Listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <form method="post">
                                <div class="form-group">
                                    <label>Kabupaten/Kota</label>
                                    <div id="select_div">
                                        <select class="form-control" id="select_kabupaten">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <select class="form-control" id="select_kecamatan">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kelurahan/Desa</label>
                                    <select class="form-control" id="select_kelurahandesa">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Blok Sensus</label>
                                    <select class="form-control" id="select_bloksensus">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary btn-lg btn-block" id="btn_lihat">Lihat Progres</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-8">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
