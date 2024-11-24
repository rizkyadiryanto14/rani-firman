<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Bawaslu Sumbawa</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- Favicons -->
	<link href="<?= base_url() ?>assets/images/logo.png" rel="icon">
	<link href="<?= base_url() ?>assets/landing/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url() ?>assets/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/landing/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Main CSS File -->
	<link href="<?= base_url() ?>assets/landing/css/main.css" rel="stylesheet">

	<!-- =======================================================
	* Template Name: iLanding
	* Template URL: https://bootstrapmade.com/ibootstrlanding-ap-page-telanding-mplate/
	* Updated: Nov 12 2024 with Bootstrap v5.3.3
	* Author: BootstrapMade.com
	* License: https://bootstrapmade.com/license/
	======================================================== -->
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
	<div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

		<a href="<?= base_url('Home') ?>" class="logo d-flex align-items-center me-auto me-xl-0">
			<img src="<?= base_url() ?>assets/images/logo.png" alt="">
		</a>

		<nav id="navmenu" class="navmenu">
			<ul>
				<li><a href="<?= base_url('Home') ?>" class="active">Beranda</a></li>
				<li class="dropdown"><a href="#"><span>Profile Bawaslu</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
					<ul>
						<li><a href="<?= base_url('struktur_bawaslu') ?>">Struktur Bawaslu</a></li>
						<li><a href="<?= base_url('visi_misi') ?>">Visi Misi</a></li>
						<li><a href="<?= base_url('dasar_hukum') ?>">Dasar Hukum</a></li>
					</ul>
				</li>
				<li><a href="<?= base_url('informasi_public') ?>">Informasi Publik</a></li>

				<li><a href="#contact">Kontak</a></li>
			</ul>
			<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
		</nav>

		<a class="btn-getstarted" href="<?= base_url('datacenter') ?>">Get Started</a>

	</div>
</header>

<main class="main">

	<!-- Hero Section -->
	<section id="hero" class="hero section bg-light py-5">

		<div class="container" data-aos="fade-up" data-aos-delay="100" style="padding-top: 5%">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<!-- Card -->
					<div class="card shadow-lg border-0">
						<div class="card-header bg-primary text-white text-center py-4">
							<h1 class="fw-bold">Visi & Misi Bawaslu</h1>
						</div>
						<div class="card-body p-4">
							<!-- Visi -->
							<div class="mb-5">
								<div class="d-flex align-items-center mb-3">
									<i class="bi bi-eye-fill text-primary me-2" style="font-size: 1.5rem;"></i>
									<h2 class="fw-bold mb-0">Visi</h2>
								</div>
								<p class="text-muted ps-4 fs-5">
									Terwujudnya Bawaslu sebagai Lembaga Pengawal Terpercaya dalam Penyelenggaraan Pemilu Demokratis, Bermartabat, Berintegritas dan Berkualitas.
								</p>
							</div>

							<!-- Misi -->
							<div>
								<div class="d-flex align-items-center mb-3">
									<i class="bi bi-list-task text-primary me-2" style="font-size: 1.5rem;"></i>
									<h2 class="fw-bold mb-0">Misi</h2>
								</div>
								<ul class="list-group list-group-flush ps-4">
									<li class="list-group-item fs-5"><i class="bi bi-check-circle-fill text-success me-2"></i>Membangun aparatur dan kelembagaan Pengawas Pemilu yang kuat, mandiri dan solid.</li>
									<li class="list-group-item fs-5"><i class="bi bi-check-circle-fill text-success me-2"></i>Mengembangkan pola dan metode pengawasan yang efektif dan efisien.</li>
									<li class="list-group-item fs-5"><i class="bi bi-check-circle-fill text-success me-2"></i>Memperkuat sistem kontrol nasional dalam satu manajemen pengawasan yang terstruktur, sistematis, dan integratif berbasis teknologi.</li>
									<li class="list-group-item fs-5"><i class="bi bi-check-circle-fill text-success me-2"></i>Meningkatkan keterlibatan masyarakat dan peserta Pemilu, serta meningkatkan sinergi kelembagaan dalam pengawasan Pemilu partisipatif.</li>
									<li class="list-group-item fs-5"><i class="bi bi-check-circle-fill text-success me-2"></i>Meningkatkan kepercayaan publik atas kualitas kinerja pengawasan berupa pencegahan dan penindakan, serta penyelesaian sengketa secara cepat, akurat dan transparan.</li>
									<li class="list-group-item fs-5"><i class="bi bi-check-circle-fill text-success me-2"></i>Membangun Bawaslu sebagai pusat pembelajaran pengawasan Pemilu baik bagi pihak dari dalam negeri maupun pihak dari luar negeri.</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End Card -->
				</div>
			</div>
		</div>

	</section>


	<!-- Contact Section -->
	<section id="contact" class="contact section light-background">

		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2>Kontak</h2>
			<p>Kirimkan pesan langsung ke panitia bawaslu dengan mengisi form dibawah ini, ayoawasibersama</p>
		</div><!-- End Section Title -->

		<div class="container" data-aos="fade-up" data-aos-delay="100">

			<div class="row g-4 g-lg-5">
				<div class="col-lg-5">
					<div class="info-box" data-aos="fade-up" data-aos-delay="200">
						<h3>Contact Info</h3>
						<p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>

						<div class="info-item" data-aos="fade-up" data-aos-delay="300">
							<div class="icon-box">
								<i class="bi bi-geo-alt"></i>
							</div>
							<div class="content">
								<h4>Our Location</h4>
								<p>Jl. Lintas Sumbawa - Bima No.21, Pekat</p>
								<p>Kec. Sumbawa, Kabupaten Sumbawa</p>
							</div>
						</div>

						<div class="info-item" data-aos="fade-up" data-aos-delay="400">
							<div class="icon-box">
								<i class="bi bi-telephone"></i>
							</div>
							<div class="content">
								<h4>Phone Number</h4>
								<p>0859-3040-1173</p>
							</div>
						</div>

						<div class="info-item" data-aos="fade-up" data-aos-delay="500">
							<div class="icon-box">
								<i class="bi bi-envelope"></i>
							</div>
							<div class="content">
								<h4>Email Address</h4>
								<p>set.sumbawa@bawaslu.go.id</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-7">
					<div class="contact-form" data-aos="fade-up" data-aos-delay="300">
						<h3>Get In Touch</h3>
						<p>Tuliskan Pesan Anda Dibawah ini</p>

						<form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
							<div class="row gy-4">

								<div class="col-md-6">
									<input type="text" name="name" class="form-control" placeholder="Your Name" required="">
								</div>

								<div class="col-md-6 ">
									<input type="email" class="form-control" name="email" placeholder="Your Email" required="">
								</div>

								<div class="col-12">
									<input type="text" class="form-control" name="subject" placeholder="Subject" required="">
								</div>

								<div class="col-12">
									<textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
								</div>

								<div class="col-12 text-center">
									<div class="loading">Loading</div>
									<div class="error-message"></div>
									<div class="sent-message">Your message has been sent. Thank you!</div>

									<button type="submit" class="btn">Send Message</button>
								</div>

							</div>
						</form>

					</div>
				</div>

			</div>

		</div>

	</section><!-- /Contact Section -->

</main>


<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url() ?>assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/landing/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url() ?>assets/landing/vendor/aos/aos.js"></script>
<script src="<?= base_url() ?>assets/landing/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url() ?>assets/landing/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url() ?>assets/landing/vendor/purecounter/purecounter_vanilla.js"></script>

<!-- Main JS File -->
<script src="<?= base_url() ?>assets/landing/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if ($this->session->flashdata('success')) : ?>
	<script>
		Swal.fire({
			title: 'Sukses!',
			text: `<?php echo $this->session->flashdata('success'); ?>`,
			icon: 'success',
			confirmButtonText: 'OK'
		});
	</script>
<?php endif; ?>

<?php if ($this->session->flashdata('error')) : ?>
	<script>
		Swal.fire({
			title: 'Gagal!',
			text: `<?php echo $this->session->flashdata('error'); ?>`,
			icon: 'error',
			confirmButtonText: 'OK'
		});
	</script>
<?php endif; ?>

</body>

</html>
