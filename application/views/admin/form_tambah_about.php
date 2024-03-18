<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item dropdown no-arrow">

                    <a class="nav-link dropdown-toggle" href="<?= base_url('welcome') ?>" target="#">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"> Preview Halaman</span>
                        <i class="fas fa-fw fa-eye"></i>
                    </a>
                </li>


                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hello, <?php echo $this->session->userdata('nama_admin') ?></span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/back-end/') ?>img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->

            </p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h1 class="h3 mb-2 text-gray-800">Form Tambah Halaman Tentang Kami</h1>
                </div>
                <div class="card-body">
                    
                        <form method="POST" action="<?=base_url('admin/about/tambah_about_aksi')?>" Enctype="Multipart/Form-Data">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Tagline</label>
                               
                                <textarea class="form-control" id="tagline" type="text" placeholder="" name="tagline" rows="3"></textarea>
                                <?php echo form_error('tagline','<span class="text-small text-danger">','</span>') ?>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Deskripsi</label>
                                <textarea class="form-control" id="desc" type="text" placeholder="" name="desc" rows="4"></textarea>
                                <?php echo form_error('desc','<span class="text-small text-danger">','</span>') ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                                
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-sm btn-danger">Reset</button>

                        </form>
               
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>


    <!-- End of Main Content -->