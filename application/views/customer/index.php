<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>TA MODISTE</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url('assets/front-end/') ?>assets/img/favicon.png" rel="icon">
	<link href="<?= base_url('assets/front-end/') ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('assets/back-end/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/front-end/') ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?= base_url('assets/front-end/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front-end/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url('assets/front-end/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front-end/') ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?= base_url('assets/front-end/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url('assets/front-end/') ?>assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: FlexStart
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="header fixed-top">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

			<a href="#" class="logo d-flex align-items-center">
				<img src="<?= base_url('assets/front-end/') ?>assets/img/logo.png" alt="" style="zoom: 1.4 ;">

			</a>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
					<li class="dropdown"><a href="#about"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="#team">Tentang Owner</a></li>
						</ul>
					</li>
					<li><a class="nav-link scrollto" href="#services">Layanan</a></li>
					<li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
					<li><a class="nav-link scrollto" href="#clients">Clients</a></li>
					<li><a class="nav-link scrollto" href="#testimonials">Testimonial</a></li>



					<li><a class="nav-link scrollto" href="#footer">Hubungi Kami</a></li>
					<li><a class="getstarted scrollto" href="<?= base_url('/auth/') ?>">Login</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="hero d-flex align-items-center">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center">
					<h1 data-aos="fade-up">Kualitas adalah prioritas kami!</h1>
					<h2 style="font-size:16pt" data-aos="fade-up" data-aos-delay="400">Jasa jahit berkualitas, gaya yang unik, dan waktu tepat. Kreasikan busana impian Anda bersama kami.<br><b>Let's make your dream design.</b></h2>
					<div data-aos="fade-up" data-aos-delay="600">
						<div class="text-center text-lg-start">
							<a href="https://wa.me/6281392149471?text=Selamat%20datang%20di%20TA%20MODISTA%20RUMAH%20JAHIT%2C%20Ada%20yang%20bisa%20kami%20bantu...?" target="#" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
								<span>Konsultasi Sekarang</span>
								<i class="bi bi-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
					<img src="<?= base_url('assets/front-end/') ?>assets/img/index1.png" class="img-fluid" style="width:450px;height:450px;" alt="">
				</div>
			</div>
		</div>

	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= About Section ======= -->
		<section id="about" class="about">


			<div class="container" data-aos="fade-up">
				<div class="row gx-0">

					<div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
						<div class="content">
							<h3>Tentang Kami</h3>
							<?php foreach ($about as $abt) : ?>
								<h2><?php echo $abt->tagline ?></h2>
								<p>
									<?php echo $abt->desc ?>
								</p>
							<?php endforeach; ?>
						</div>
					</div>

					<div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
						<img src="<?php echo base_url() . 'assets/upload/' . $abt->gambar ?>" class="img-fluid" alt="">
					</div>

				</div>
			</div>

		</section><!-- End About Section -->
		<?php foreach ($owner as $own) : ?>
			<section id="about" class="about">
				<header class="section-header">

					<h2 style="font-size: 13px;
  letter-spacing: 1px;
  font-weight: 700;
  margin: 0;
  color: #4154f1;
  text-transform: uppercase;">Tentang Owner</h2>

					<p>Saya Ista Viana, tumbuh bersama TA Modiste</p>
				</header>
				<div class="container" data-aos="fade-up" style="margin-top: -1cm;margin-bottom: -2cm;">
					<div class="row gx-0">
						<div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
							<section id="team" class="team">
								<div class="member">
									<div class="member-img" style="height: 300px;">
										<img src="<?php echo base_url() . 'assets/upload/' . $own->avatar ?>" class="img-fluid" alt="">
										<div class="social">
											<a href=""><i class="bi bi-twitter"></i></a>
											<a href=""><i class="bi bi-facebook"></i></a>
											<a href=""><i class="bi bi-instagram"></i></a>
											<a href=""><i class="bi bi-linkedin"></i></a>
										</div>
									</div>

									<div class="member-info">
										<h4>Ista Viana</h4>
										<span>Brand Owner</span>
										<p>"<?php echo $own->quotes ?>"</p>
									</div>
								</div>
							</section>
						</div>
						<div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
							<div class="content" style="height: 500px;padding-top: 1.5cm;">
								<h3>1 langkah lebih dekat dengan Owner TA Modiste</h3>

								<h2><?php echo mb_strimwidth($own->judul_artikel, 0, 120, '...'); ?></h2>

								<p style=" max-width: 15ch;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
									<?php echo mb_strimwidth($own->artikel, 0, 500, '...'); ?>
								</p>

								<div class="text-center text-lg-start">
									<button style="border: none;" type="button" data-bs-toggle="modal" data-bs-target="#artikelModal" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
										<span>Read More</span>
										<i class="fa fa-chevron-circle-right "></i>
									</button>
								</div>

								<!-- Modal Artikel Owner -->
								<div class="modal fade" id="artikelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Tentang Owner</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body" style="margin: 20px;margin-top: 0;">


												<img src="<?php echo base_url() . 'assets/upload/' . $own->avatar ?>" class="img-fluid" style="width: 300px;float: left;margin: 20px;margin-left: 0;" alt="">



												<span style="text-align: justify;"> <?php echo $own->artikel ?></span>

											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>


					</div>
				</div>



			</section><!-- End About Section -->



			<!-- ======= Services Section ======= -->
			<section id="services" class="services">

				<div class="container" data-aos="fade-up">

					<header class="section-header">
						<h2>Layanan</h2>
						<p>Kami memberikan pelayanan yang terbaik</p>
					</header>


					<?php

					?>
					<div class="row gy-4">
						<?php foreach ($layanan as $svc) : ?>
							<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
								<div class="service-box orange">
									<i class="fa fa-<?php echo $svc->clipart ?> icon"></i>
									<h3><?php echo $svc->nama_layanan ?></h3>
									<p><?php echo $svc->desc ?></p>

								</div>
							</div>
						<?php endforeach; ?>
					</div>


				</div>

			</section><!-- End Services Section -->

			<!-- ======= Pricing Section ======= -->


			<!-- ======= F.A.Q Section ======= -->

			<!-- ======= Portfolio Section ======= -->
			<section id="gallery" class="portfolio">

				<div class="container" data-aos="fade-up">

					<header class="section-header">
						<h2>Gallery</h2>
						<p>Kreasikan gaya Anda dengan konveksi kami</p>
					</header>

					<div class="row" data-aos="fade-up" data-aos-delay="100">
						<div class="col-lg-12 d-flex justify-content-center">
							<ul id="portfolio-flters">
								<li data-filter="*" class="filter-active">All</li>
								<?php foreach ($gallery_category as $kat) : ?>

									<li data-filter=".<?php echo $kat->kategori ?>"><?php echo $kat->kategori ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>

					<div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
						<?php foreach ($gallery as $img) : ?>
							<div class="col-lg-4 col-md-6 portfolio-item filter-app <?php echo $img->kategori ?>">
								<div class="portfolio-wrap">
									<img style="" src="<?php echo base_url('assets/upload/' . $img->gambar) ?>" class="img-fluid" alt="<?php echo $img->kategori ?>">
									<div class="portfolio-info">

										<div class="portfolio-links">
											<a href="<?php echo base_url('assets/upload/' . $img->gambar) ?>" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>

										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>

				</div>

			</section><!-- End Portfolio Section -->

			<!-- ======= Testimonials Section ======= -->
			<section id="testimonials" class="testimonials">

				<div class="container" data-aos="fade-up">

					<header class="section-header">
						<h2>Testimoni</h2>
						<p>Apa yang mereka katakan?</p>
					</header>

					<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
						<div class="swiper-wrapper">
							<?php foreach ($testimonial as $testi) : ?>
								<div class="swiper-slide">
									<div class="testimonial-item">
										<div class="stars">
											<?php
											for ($i = 0; $i < $testi->rating; $i++) { ?>

												<i class="bi bi-star-fill"></i>
											<?php } ?>



										</div>
										<p>
											"<?php echo $testi->deskripsi ?>"
										</p>
										<div class="profile mt-auto">
											<img src="<?php echo base_url() . 'assets/upload/' . $testi->avatar ?>" class="testimonial-img" alt="">
											<h3><?php echo $testi->nama ?></h3>
											<h4><?php echo $testi->company ?></h4>
										</div>
									</div>
								</div><!-- End testimonial item -->
							<?php endforeach ?>


						</div>
						<div class="swiper-pagination"></div>
					</div>

				</div>

			</section><!-- End Testimonials Section -->

			<!-- ======= Team Section ======= -->


			<!-- ======= Clients Section ======= -->
			<section id="clients" class="clients">

				<div class="container" data-aos="fade-up">

					<header class="section-header">
						<h2>Klien dan Kemitraan</h2>
						<p>Kemitraan yang kuat dengan berbagai brand ternama</p>
					</header>

					<div class="clients-slider swiper">
						<div class="swiper-wrapper align-items-center">
							<?php foreach ($clients as $cli) : ?>
								<div class="swiper-slide"><img src="<?php echo base_url() . 'assets/upload/' . $cli->gambar ?>" class="img-fluid" alt="">
									<h6 style="text-align: center;padding-top: 0.5cm;"><?php echo $cli->nama_client ?></h6>
								</div>


							<?php endforeach ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>

			</section><!-- End Clients Section -->



			<!-- ======= Contact Section ======= -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">



		<div class="footer-top">
			<div class="container">
				<div class="row gy-4">
					<div class="col-lg-5 col-md-12 footer-info">
						<a href="index.html" class="logo d-flex align-items-center">
							<img src="<?= base_url('assets/front-end/') ?>assets/img/logo.png" alt="" style="zoom: 2;">

						</a>
						<p>Bergabunglah dengan konveksi inovatif kami, kami menghadirkan pakaian berkualitas tinggi yang diciptakan khusus untuk Anda dengan sentuhan desain yang kreatif dan personalisasi yang menakjubkan.</p>
						<div class="social-links mt-3">
							<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
							<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
							<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>

						</div>
					</div>



					<div class="col-lg-2 col-6 footer-links">

					</div>
					<div class="col-lg-2 col-6 footer-links">
						<h4>Layanan Kami</h4>
						<ul>
							<li><i class="bi bi-chevron-right"></i> <a href="#">Jasa Jahit</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="#">Cutting Kain</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="#">Konveksi</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="#">Sablon</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
						<h4>Hubungi Kami</h4>
						<p>Kalibaru, Kec. Tengah Tani,<br>
							Kabupaten Cirebon,<br>
							Jawa Barat 45153<br>
							Indonesia <br><br>
							<strong>Telepon:</strong> +62 813-9214-9471<br>
							<strong>Email:</strong> tamodistebusiness@gmail.com<br>
							<strong>Jam Operasional:</strong> Senin-Sabtu 09.00 s/d 17.00<br>
						</p>

					</div>

				</div>
			</div>
		</div>

		<div class="container">
			<div class="copyright">
				&copy; Copyright 2023 <strong><span>TA MODISTE</span></strong>. All Rights Reserved
			</div>

		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url('assets/front-end/') ?>assets/vendor/purecounter/purecounter_vanilla.js">
	</script>
	<script src="<?= base_url('assets/front-end/') ?>assets/vendor/aos/aos.js">
	</script>
	<script src="<?= base_url('assets/front-end/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/front-end/') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="<?= base_url('assets/front-end/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?= base_url('assets/front-end/') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?= base_url('assets/front-end/') ?>assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url('assets/front-end/') ?>assets/js/main.js"></script>

</body>

</html>
