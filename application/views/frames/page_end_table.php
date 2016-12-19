	<!-- DataTables JavaScript -->
    <script src="<?php echo base_url()?>resources/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/datatables-responsive/dataTables.responsive.js"></script>
    
    <!-- dynamic table -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url()?>resources/js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url()?>resources/js/DT_bootstrap.js"></script>
    <script src="<?php echo base_url()?>resources/js/dynamic_table_init.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true,
            bInfo: false,
            bFilter: false,
            bPaginate: false
        });
    });
    </script>