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
                Tabel Pengaduan Masalah
                </div>
                <div class="panel-body">
                    <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                    <thead>
                    <tr>
                        <th class="center" width="50px">Detail</th>
                        <th class="center" width="150px">Nama PCL</th>
                        <th class="center" width="150px">Nama Kortim</th>
                        <th class="center" width="150px">Judul Masalah</th>
                        <th class="center" width="150px">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td class="center"><img src="<?php echo base_url() . 'resources/images/details_open.png'; ?>"></td> 
                        <td>Cholid</td>
                        <td class="center">Nadra</td>
                        <td class="center">Perbedaan bahasa</td>
                        <td class="center">Belum ditangani</td>
                    </tr>
                    <tr class="gradeC">
                        <td class="center"><img src="<?php echo base_url() . 'resources/images/details_open.png'; ?>"></td> 
                        <td>Nagari</td>
                        <td class="center">Nadra</td>
                        <td class="center">kesalahan kondef</td>
                        <td class="center">Telah ditangani</td>
                    </tr>
                    </tbody>
                    </table>
                    </div>
                </div>
                </div>
                </div>
        </div>
        <!-- /.row -->
</div>
<!-- /#page-wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url()?>resources/vendor/jquery/jquery.min.js"></script>

    <!-- core -->
    <script src="<?php echo base_url()?>resources/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>resources/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>resources/dist/js/sb-admin-2.js"></script>

    <!-- dynamic table -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url()?>resources/js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url()?>resources/js/DT_bootstrap.js"></script>

    <script type="text/javascript">
        function fnFormatDetails ( oTable, nTr ) {
            var base_url = '<?php echo base_url()."resources/images/foto1.jpg" ?>';
            var aData = oTable.fnGetData( nTr );
            var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
            sOut += '<tr><td>Nama Pencacah:</td><td>'+aData[1]+'</td></tr>';
            sOut += '<tr><td>Keterangan:</td><td>Responden tidak bisa berbahasa Indonesia dan PCL tidak mendapatkan penerjemah</td></tr>';
            sOut += '<tr><td>Lokasi:</td><td>Belitung Utara</td></tr>';
            sOut += '<tr><td>Waktu:</td><td>Selasa, 28 Februari 2017 pukul 09.30 WIB</td></tr>';
            sOut += '<tr> <td>Gambar : </td> <td><img src="'+base_url+'" style="width:200px;"></td> </tr>';
            sOut += '</table>';

            return sOut;
        }

        $(document).ready(function() {

            $('#dynamic-table').dataTable( {
                "aaSorting": [[ 4, "desc" ]]
            } );

            /*
             * Initialse DataTables, with no sorting on the 'details' column
             */
            var oTable = $('#hidden-table-info').dataTable( {
                "aoColumnDefs": [
                    { "bSortable": false, "aTargets": [ 0 ] }
                ],
                "aaSorting": [[0, 'asc']]
            });

            /* Add event listener for opening and closing details
             * Note that the indicator for showing which row is open is not controlled by DataTables,
             * rather it is done here
             */
            $(document).on('click','#hidden-table-info tbody td img',function () {
                var nTr = $(this).parents('tr')[0];
                if ( oTable.fnIsOpen(nTr) )
                {
                    /* This row is already open - close it */
                    this.src = "http://localhost/PKL/resources/images/details_open.png";
                    oTable.fnClose( nTr );
                }
                else
                {
                    /* Open this row */
                    this.src = "http://localhost/PKL/resources/images/details_close.png";
                    oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
                }
            } );
        } );
    </script>

</body>

</html>        