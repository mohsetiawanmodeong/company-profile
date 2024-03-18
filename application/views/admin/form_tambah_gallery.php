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
                    <h4 class="h4 mb-0 text-gray-800">Form Tambah Gallery</h4>
                </div>
                <div class="card-body">
                    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
                    <form method="POST" id="myForm" action="<?= base_url('admin/gallery/tambah_gallery_aksi') ?>" Enctype="Multipart/Form-Data">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar</label>
                            <input type="file" class="form-control-file" name="gambar" id="gambar">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">Kategori</label>
                            <select id="kategori" class="form-control" type="text" placeholder="" name="kategori">
                                <option value="Jasa Jahit">Jasa Jahit</option>
                                <option value="Workshop">Workshop</option>
                                <option value="Produk">Produk</option>
                                <option value="Testimonial">Testimonial</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3" id="fieldLain" style="display: none;">
                            <label for="exampleFormControlInput1">Isikan Kategori</label>
                            <input class="form-control" id="kategorilain" type="text" placeholder="" name="kategorilain">
                            <?php echo form_error('kategorilain', '<span class="text-small text-danger">', '</span>') ?>
                        </div>





                        <?php echo form_error('kategorilain', '<span class="text-small text-danger">', '</span>') ?>


                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-danger">Reset</button>



                    </form>
                    <script>
                        // Ambil elemen-elemen HTML yang diperlukan
                        var selectElement = document.getElementById("kategori");
                        var fieldTampilElement = document.getElementById("fieldLain");


                        // Sembunyikan elemen field_lain saat halaman pertama kali dimuat
                        fieldTampilElement.style.display = "none";

                        // Tambahkan event listener untuk mendeteksi perubahan pada elemen select
                        selectElement.addEventListener("change", function() {
                            var selectedOption = selectElement.value;

                            if (selectedOption === "Lainnya") {
                                fieldTampilElement.style.display = "block";
                            } else {
                                fieldTampilElement.style.display = "none";
                            }
                        })
                    </script>



                    <!-- <script>
                        function tampilkanFieldLain(select) {
                            var selectedOption = select.value;
                            var fieldLain = document.getElementById('fieldLain');
                            var fieldLain = document.getElementById('fieldLain');

                            if (selectedOption === 'Lainnya') {
                                fieldLain.style.display = 'block';
                            } else {
                                fieldLain.style.display = 'none';

                            }
                        }
                    </script> -->
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>




    <!-- End of Main Content -->