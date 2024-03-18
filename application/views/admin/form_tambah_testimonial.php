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
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Testimonial</h6>

                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
                            <form class="row g-3" method="POST" action="<?= base_url('admin/testimonial/tambah_testimonial_aksi') ?>" Enctype="Multipart/Form-Data">
                                <div class="col-md-12 mb-3">
                                    <label for="exampleFormControlInput1">Nama</label>
                                    <input class="form-control" id="nama" type="text" placeholder="" name="nama"></input>
                                    <?php echo form_error('nama', '<span class="text-small text-danger">', '</span>') ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleFormControlInput1">Perusahaan/Status</label>
                                    <input class="form-control" id="company" type="text" placeholder="" name="company"></input>
                                    <?php echo form_error('company', '<span class="text-small text-danger">', '</span>') ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleFormControlInput1">Rating</label>

                                    <select class="form-control" id="rating" type="text" placeholder="" name="rating">
                                        <option value="1">One star</option>
                                        <option value="2">Two Stars</option>
                                        <option value="3">Three stars </option>
                                        <option value="4">Four stars </option>
                                        <option value="5">Five stars </option>
                                        <?php echo form_error('rating', '<span class="text-small text-danger">', '</span>') ?>
                                    </select>

                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="exampleFormControlInput1">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" type="text" placeholder="" name="deskripsi" rows="3"></textarea>
                                    <?php echo form_error('deskripsi', '<span class="text-small text-danger">', '</span>') ?>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleFormControlFile1">Gambar</label>
                                    <input type="file" class="form-control-file" name="gambar">
                                </div> -->

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
                            <div class="chart-pie">
                                <img id="image" width="100%" height="260px" />



                            </div>
                            <?php echo form_error('gambar', '<span class="text-small text-danger">', '</span>') ?>
                            <div class="mt-1 text-center small">

                                <input type="file" class="form-control-file" onchange="upload(this);" id="gambar" name="gambar">
                            </div>

                        </div>
                    </div>
                    </form>
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