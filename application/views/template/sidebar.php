    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?= base_url('assets/img/profile_small.jpg') ?>" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Admin</strong></a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="#">Profile</a></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        SP
                    </div>
                </li>
                <?php if ($this->session->userdata('id_role') == 9): ?>
                    <li>
                        <a href="<?=  base_url('Admin') ?>"><i class="fa fa-diamond"></i> <span class="nav-label">Dashboard</span></a>
                    </li>
                    <li id="data_master">
                        <a href="#"><i class="fa fa-briefcase"></i> <span class="nav-label">Data Master</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?=  base_url('Admin/pejabat') ?>"><i class="fa fa-user"></i>Pejabat Struktural</a></li>
                            <li><a href="<?=  base_url('Admin/fakultas') ?>"><i class="fa fa-user"></i>Data Fakultas</a></li>
                            <li><a href="<?=  base_url('Admin/unit_kerja') ?>"><i class="fa fa-user"></i>Unit Kerja</a></li>
                        </ul>
                    </li>
                     <li id="data_user">
                        <a href="#"><i class="fa fa-briefcase"></i> <span class="nav-label">Data User</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?=  base_url('Admin/user-rektorat') ?>"><i class="fa fa-user"></i>Admin Rektorat</a></li>
                            <li><a href="<?=  base_url('Admin/user-fakultas') ?>"><i class="fa fa-user"></i>Admin Fakultas</a></li>
                            <li><a href="<?=  base_url('Admin/user-prodi') ?>"><i class="fa fa-user"></i>Admin Program Studi</a></li>
                        </ul>
                    </li>
                    <li id="data_kpi">
                        <a href="#"><i class="fa fa-briefcase"></i> <span class="nav-label">Data KPI</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?=  base_url('Admin/kategori');?>"><i class="fa fa-book"></i>Kategori KPI</a></li>
                            <li><a href="<?=  base_url('Admin/item');?>"><i class="fa fa-book"></i>Item KPI</a></li>
                            <li><a href="<?=  base_url('Admin/indikator');?>"><i class="fa fa-book"></i>Indikator KPI</a></li>
                        </ul>
                    </li>
                    <li id="pengelolaan">
                        <a href="#"><i class="fa fa-random"></i> <span class="nav-label">Pengelolaan KPI Rektor</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?=  base_url('Admin/target') ?>"><i class="fa fa-calendar-o"></i>Entry Target KPI</a></li>
                            <li><a href="<?=  base_url('Admin/') ?>"><i class="fa fa-calendar-o"></i>Sebaran KPI</a></li>
                           
                        </ul>
                    </li>
                    <li id="capaian">
                        <a href="#"><i class="fa fa-random"></i> <span class="nav-label">Capaian KPI</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?=  base_url('Admin/sinkron') ?>"><i class="fa fa-calendar-o"></i>Sinkron Data</a></li>
                            <li><a href="<?=  base_url('Admin/riwayat') ?>"><i class="fa fa-calendar-o"></i>Laporan Capaian</a></li>
                           
                        </ul>
                    </li>
                <?php elseif ($this->session->userdata('id_role') == 1) :?>
                    <li id="pengelolaan">
                        <a href="#"><i class="fa fa-random"></i> <span class="nav-label">Pengelolaan KPI Rektor</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?=  base_url('rektorat/target') ?>"><i class="fa fa-calendar-o"></i>Entry Target KPI</a></li>
                            <!-- <li><a href="<?=  base_url('Admin/') ?>"><i class="fa fa-calendar-o"></i>Sebaran KPI</a></li> -->
                           
                        </ul>
                    </li>
                <?php elseif ($this->session->userdata('id_role') == 2) :?>
                    <li id="pengelolaan">
                        <a href="#"><i class="fa fa-random"></i> <span class="nav-label">Pengelolaan KPI Rektor</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?=  base_url('fakultas/target') ?>"><i class="fa fa-calendar-o"></i>Entry Target KPI</a></li>
                           
                        </ul>
                    </li>
                <?php elseif ($this->session->userdata('id_role') == 3) :?>
                    <li id="pengelolaan">
                        <a href="#"><i class="fa fa-random"></i> <span class="nav-label">Pengelolaan KPI Rektor</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?=  base_url('prodi/target') ?>"><i class="fa fa-calendar-o"></i>Entry Target KPI</a></li>
                           
                        </ul>
                    </li>
                <?php endif ?>
            </ul>

        </div>
    </nav>
