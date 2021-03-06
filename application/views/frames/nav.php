<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top nav-color" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"> WEB MONITORING PKL 56</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li>
            <!-- untuk kembali ke halaman web jarlap -->
            <a href="#"><span class="fa fa-home"></span> Home</a>
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <!-- search autocomplete menggunakan nim -->
                        <input type="text" class="form-control" placeholder="Cari Mahasiswa (NIM)">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="<?php echo base_url('pkl/dashboard')?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-list-ol fa-fw"></i> Progres Listing<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('pkl/progres_agregat_listing')?>">Agregat</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pkl/progres_listing')?>">Wilayah</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-tasks fa-fw"></i> Informasi Pencacahan<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('pkl/unit_cacah')?>">Daftar Unit Cacah</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pkl/search_unit_cacah')?>">Pencarian Unit Cacah</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pkl/pcl')?>">Daftar PCL(Pencacah Lapangan)</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pkl/search_pcl')?>">Pencarian PCL(Pencacah Lapangan)</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Progres Pencacahan<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('pkl/progres_agregat_cacah')?>">Agregat</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pkl/progres_cacah')?>">Wilayah</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pkl/analisis_realtime')?>">Analisis Real Time</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('pkl/monitoring_masalah')?>"><i class="fa fa-desktop fa-fw"></i> Monitoring Masalah Lapangan</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
