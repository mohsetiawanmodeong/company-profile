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
            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-7">
                    <?php echo $this->session->flashdata('pesan') ?>
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Tentang Owner</h6>

                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
                            <?php foreach ($owner as $own) : ?>
                                <form class="row g-3" method="POST" action="<?= base_url('admin/owner/update_owner_aksi') ?>" Enctype="Multipart/Form-Data">
                                    <div class="col-md-12 mb-3">
                                        <input type="hidden" name="id" value="<?php echo $own->id ?>">
                                        <label for="exampleFormControlInput1">Judul artikel</label>
                                        <input class="form-control" id="judul" type="text" placeholder="" name="judul" value="<?php echo $own->judul_artikel ?>"></input>
                                        <?php echo form_error('judul', '<span class="text-small text-danger">', '</span>') ?>
                                    </div>


                                    <div class="col-md-12 mb-3">
                                        <label for="exampleFormControlInput1">Isi artikel</label>
                                        <textarea class="form-control" id="artikel" type="text" placeholder="" name="artikel" rows="3"><?php echo $own->artikel ?></textarea>
                                        <?php echo form_error('artikel', '<span class="text-small text-danger">', '</span>') ?>
                                    </div>


                                    <div class="col-md-12 mb-3" style="text-align: right;">
                                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                                    </div>




                        </div>
                    </div>
                </div>

                <!-- Pie Chart -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Avatar</h6>

                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Quotes</label>
                                <input class="form-control" id="quotes" type="text" placeholder="" name="quotes" value="<?php echo $own->quotes ?>"></input>
                                <?php echo form_error('quotes', '<span class="text-small text-danger">', '</span>') ?>
                            </div>
                            <div class="">
                                <label for="exampleFormControlInput1">Avatar</label>
                                <div class="chart-pie">
                                    <img id="image" width="100%" height="260px" src="<?php echo base_url() . 'assets/upload/' . $own->avatar ?>">



                                </div>
                            </div>

                            <?php echo form_error('gambar', '<span class="text-small text-danger">', '</span>') ?>
                            <div class="mt-1 text-center small">

                                <input type="file" class="form-control-file" onchange="upload(this);" id="gambar" name="gambar">
                            </div>

                        </div>
                    </div>
                    </form>
                <?php endforeach; ?>
                </div>
            </div>

            <!-- Page Heading -->
            <script>
                function upload(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#image').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
            </p>

            <!-- DataTales Example -->


        </div>
        <!-- /.container-fluid -->