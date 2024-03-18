<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">

                </div>
                <div class="sidebar-brand-text mx-3">TA MODISTE</div>
            </a>

            <!-- Divider -->



            <!-- Nav Item - Dashboard -->
            <li class="nav-item<?php echo (strpos(current_url(), "admin/dashboard") !== false) ? " active" : "" ?>">
                <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                INPUT DATA
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item<?php echo (strpos(current_url(), "admin/") !== false) ? " active" : "" ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Halaman</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar Halaman</h6>
                        <a class="collapse-item <?php echo (strpos(current_url(), "admin/about") !== false) ? "active" : "" ?>" href="<?= base_url('admin/about') ?>">Tentang Kami</a>
                        <a class="collapse-item <?php echo (strpos(current_url(), "admin/owner") !== false) ? "active" : "" ?>" href="<?= base_url('admin/owner') ?>">Tentang Owner</a>
                        <a class="collapse-item <?php echo (strpos(current_url(), "admin/layanan") !== false) ? "active" : "" ?>" href="<?= base_url('admin/layanan') ?>">Layanan</a>
                        <a class="collapse-item <?php echo (strpos(current_url(), "admin/clients") !== false) ? "active" : "" ?>" href="<?= base_url('admin/clients') ?>">Clients</a>
                        <a class="collapse-item <?php echo (strpos(current_url(), "admin/gallery") !== false) ? "active" : "" ?>" href="<?= base_url('admin/gallery') ?>">Gallery</a>
                        <a class="collapse-item <?php echo (strpos(current_url(), "admin/testimonial") !== false) ? "active" : "" ?>" href="<?= base_url('admin/testimonial') ?>">Testimonial</a>

                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User Control
            </div>



            <!-- Nav Item - Charts -->
            <li class="nav-item<?php echo (strpos(current_url(), "admin/pengguna") !== false) ? " active" : "" ?>">
                <a class="nav-link" href="<?= base_url('admin/pengguna') ?>">
                    <i class="fas fa-fw fa-user "></i>
                    <span>Data Pengguna</span></a>
            </li>

            <li class="nav-item">
                <a data-toggle="modal" data-target="#logoutModal" class="nav-link">
                    <i class="fas fa-fw fa-chevron-circle-right"></i>
                    <span>Logout</span></a>
            </li>

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>



        <!-- End of Sidebar -->