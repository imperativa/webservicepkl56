<!-- DataTables CSS -->
<style type="text/css">
    td.details-control {
        background: url('<?php echo base_url('resources/images/details_open.png'); ?>') no-repeat center center;
        cursor: pointer;
    }
    tr.shown td.details-control {
        background: url('<?php echo base_url('resources/images/details_close.png'); ?>') no-repeat center center;
    }
    .dataTables_wrapper .dt-buttons {
      float:none;
      text-align:right;
      font-size: 15px;
      height: 25px;
    }
</style>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">Monitoring Masalah Lapangan</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class ="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-9">
                            Tabel Pengaduan Masalah
                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-link pull-right" id="reload"><i class="fa fa-refresh"></i></button>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="table_monitoring">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nama</th>
                                <th>Judul</th>
                                <th>Waktu</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                    </table>
                    </div>
                </div>
                </div>
                </div>
        </div>
        <!-- /.row -->
</div>
<!-- /#page-wrapper -->
