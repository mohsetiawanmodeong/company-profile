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
            <?php echo $this->session->flashdata('pesan') ?>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-sm-flex align-items-center justify-content-between mb-0">
                        <h4 class="h4 mb-0 text-gray-800">Data Pengguna</h4>

                    </div>
                </div>

                <div class="card-body">
                    <!-- <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengguna as $usr) :
                                ?>

                                    <tr>
                                        <td><?php echo $no++ ?></td>

                                        <td><?php echo $usr->nama_admin ?></td>
                                        <td><?php echo $usr->username ?></td>
                                        <td><?php echo preg_replace("/./", "*",  $usr->password) ?></td>
                                        <td>


                                            <a href="<?php echo base_url('admin/pengguna/delete_pengguna/') . $usr->id ?>" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i><span> Hapus</span></a>
                                            <a href="<?php echo base_url('admin/pengguna/update_pengguna/') . $usr->id ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i><span> Ubah</span></a>

                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div> -->

                    <form class="row g-3" method="POST" action="<?= base_url('auth/update_pengguna_aksi') ?>" Enctype="Multipart/Form-Data">
                        <div class="col-md-12 mb-3">
                            <label for="exampleFormControlInput1">Nama Admin</label>
                            <input class="form-control" id="nama_admin" type="text" placeholder="" name="nama_admin" value="<?php echo $this->session->userdata('nama_admin') ?>"></input>
                            <?php echo form_error('nama_admin', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="exampleFormControlInput1">Username</label>
                            <input class="form-control" id="username" type="text" placeholder="" name="username" value="<?php echo $this->session->userdata('username') ?>"></input>
                            <?php echo form_error('username', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="exampleFormControlInput1">Password Baru</label>
                            <input class="form-control" id="password" type="password" placeholder="" name="password"><?php echo $this->session->userdata('password') ?></input>
                            <?php echo form_error('password', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="exampleFormControlInput1">Masukkan Ulang Password</label>
                            <input class="form-control" id="password2" type="password" placeholder="" name="password2"></input>
                            <?php echo form_error('password2', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                        </div>




                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>


    <!-- End of Main Content -->