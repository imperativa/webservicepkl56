<!-- Page Content -->
<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Pencarian PCL(Pencacah Lapangan)</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="alert alert-success alert-dismissible" role="alert" id="alert_success" style="display: none">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				Pencarian ditemukan
			</div>
			<div class="alert alert-info alert-dismissible" role="alert" id="alert_multiple" style="display: none">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				Pencarian menemukan lebih dari satu hasil
			</div>
			<div class="alert alert-warning alert-dismissible" role="alert" id="alert_notfound" style="display: none">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				Pencarian tidak menemukan hasil, silakan coba beberapa saat lagi
			</div>
			<div class="panel panel-default">
				<div id="gmap" style="width: 100%; height: 400px;"></div>
			</div>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Cari Menggunakan Nama
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
					<div class="row">
						<div class="col-lg-3">
							<b>Nama</b>
						</div>
						<!-- search autocomplete menggunakan nama -->
						<div class="col-lg-9">
							<form id="form_search">
								<div class="input-group">
									<input type="text" class="form-control" id="autocomplete" autocomplete="off" style="width: 100%;">
									<span class="input-group-btn">
										<button class="btn btn-default" type="submit" id="btn_search"><i class="fa fa-search" id="icon_search"></i></button>
									</span>
								</div>
							</form>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-12 text-center" id="div_multiple" hidden>
		                    <p class="text-center">Ditemukan lebih dari satu hasil pencarian, silakan klik penanda pada peta untuk melihat detail</p>
		                </div>
						<div class="col-lg-12" id="div_info" hidden>
							<div class="row" style="margin-top:10px">
								<div class="col-lg-3">
									<b>Nama:</b>
								</div>
								<div class="col-lg-9">
									<span id="info_nama"></span>
								</div>
							</div>
							<div class="row" style="margin-top:10px">
								<div class="col-lg-3">
									<b>Alamat:</b>
								</div>
								<div class="col-lg-9">
									<span id="info_alamat"></span>
								</div>
							</div>
							<div class="row" style="margin-top:10px">
								<div class="col-lg-3">
									<b>Nomor Utama:</b>
								</div>
								<div class="col-lg-9">
									<span id="info_nomor_utama"></span>
								</div>
							</div>
							<div class="row" style="margin-top:10px">
								<div class="col-lg-3">
									<b>Kontak Lain:</b>
								</div>
								<div class="col-lg-9">
									<span id="info_nomor_lain"></span>
								</div>
							</div>
						</div>

						<!-- <br>
						<p> Nama responden </p>
						<br>
						<p> Alamat responden </p>
						<br>
						<p> No Telf/HP responden </p>
						<br>
						<p> Kontak lain yang bisa dihubungi </p>
						<br> -->

						<!-- <br>
						<p>: Nama Responden </p>
						<br>
						<p>: Alamat responden </p>
						<br>
						<p>: No Telpon </p>
						<br>
						<p>: Kontak Lain </p>
						<br> -->
					</div>
            	</div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Cari Menggunakan Wilayah
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                	<div class="row">
                		<div class="col-lg-12">
                			<div class="form-group">
                                <label>Kabupaten/Kota</label>
                                <select class="form-control" id="select_kabupaten">
                                    <!-- <option selected disabled>Pilih Kabupaten</option> -->
                                </select>
                            </div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
                                <label>Kecamatan</label>
                                <select class="form-control" id="select_kecamatan">
                                </select>
                            </div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
                                <label>Kelurahan/Desa</label>
                                <select class="form-control" id="select_kelurahandesa">
                                </select>
                            </div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
                                <label>Blok Sensus</label>
                                <select class="form-control" id="select_bloksensus">
                                </select>
                            </div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<button type="button" class="btn btn-primary btn-lg btn-block" id="btn_cari">Cari</button>
							</div>
						</div>
                	</div>
                	<!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
