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
			<!-- Uncomment the line below if you also wish to use an image logo -->
			 <img src="<?= base_url() ?>assets/images/logo.png" alt="">
<!--			<h1 class="sitename">Bawaslu Sumbawa</h1>-->
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
	<section id="hero" class="hero section">

		<div class="container" data-aos="fade-up" data-aos-delay="100">

			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="hero-content" data-aos="fade-up" data-aos-delay="200">
						<div class="company-badge mb-4">
							<i class="bi bi-gear-fill me-2"></i>
							Transparan dan Akuntable
						</div>

						<h1 class="mb-4">
							Bawaslu <br>
							Kabupaten Sumbawa <br>
							<span class="accent-text">#AYOAWASIBERSAMA</span>
						</h1>

						<p class="mb-4 mb-md-5">
							Badan Pengawas Pemilihan Umum Kabupaten Sumbawa
							Jl. Dr. Cipto Kelurahan Seketeng Kabupaten Sumbawa (Ex. Pengadilan)
						</p>

						<div class="hero-buttons">
							<a href="<?= base_url('datacenter') ?>" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
							<a href="https://youtu.be/ApDm1fMUlDU?si=_f1HF7_17w45oLFy" class="btn btn-link mt-2 mt-sm-0 glightbox">
								<i class="bi bi-play-circle me-1"></i>
								Vidio
							</a>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
						<img src="<?= base_url() ?>assets/landing/img/illustration-1.webp" alt="Hero Image" class="img-fluid">

						<div class="customers-badge">
							<div class="customer-avatars">
								<img src="<?= base_url() ?>assets/landing/img/avatar-1.webp" alt="Customer 1" class="avatar">
								<img src="<?= base_url() ?>assets/landing/img/avatar-2.webp" alt="Customer 2" class="avatar">
								<img src="<?= base_url() ?>assets/landing/img/avatar-3.webp" alt="Customer 3" class="avatar">
								<img src="<?= base_url() ?>assets/landing/img/avatar-4.webp" alt="Customer 4" class="avatar">
								<img src="<?= base_url() ?>assets/landing/img/avatar-5.webp" alt="Customer 5" class="avatar">
								<span class="avatar more">12+</span>
							</div>
							<p class="mb-0 mt-2">Rakyat Sumbawa Dapat Mengkases Informasi Publik Pada Halaman Informasi Publik</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
				<div class="col-lg-3 col-md-6">
					<div class="stat-item">
						<div class="stat-icon">
							<i class="bi bi-trophy"></i>
						</div>
						<div class="stat-content">
							<h4>Sigap Lapor</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="stat-item">
						<div class="stat-icon">
							<i class="bi bi-briefcase"></i>
						</div>
						<div class="stat-content">
							<h4>PPID Bawaslu</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="stat-item">
						<div class="stat-icon">
							<i class="bi bi-graph-up"></i>
						</div>
						<div class="stat-content">
							<h4>SIPS</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="stat-item">
						<div class="stat-icon">
							<i class="bi bi-award"></i>
						</div>
						<div class="stat-content">
							<h4>Pendaftaran Pemantau Pemilu</h4>
						</div>
					</div>
				</div>
			</div>

		</div>

	</section><!-- /Hero Section -->

	<!-- About Section -->
	<section id="about" class="about section">

		<div class="container" data-aos="fade-up" data-aos-delay="100">

			<div class="row gy-4 align-items-center justify-content-between">

				<div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
					<span class="about-meta">Mengenal Bawaslu Sumbawa Lebih Dekat</span>
					<h2 class="about-title">Berkomitmen dalam Menjaga Integritas dan Transparansi Pemilu di Kabupaten Sumbawa</h2>
					<p class="about-description">Bawaslu Sumbawa adalah lembaga independen yang bertugas memastikan pelaksanaan pemilu yang adil, jujur, dan demokratis di Kabupaten Sumbawa. Kami berkomitmen untuk mencegah dan menangani pelanggaran pemilu serta meningkatkan kesadaran masyarakat tentang pentingnya integritas dalam pemilu</p>

					<div class="row feature-list-wrapper">
						<div class="col-md-6">
							<ul class="feature-list">
								<li><i class="bi bi-check-circle-fill"></i> Membangun aparatur dan kelembagaan Pengawas Pemilu yang kuat, mandiri dan solid;</li>
								<li><i class="bi bi-check-circle-fill"></i> Mengembangkan pola dan metode pengawasan yang efektif dan efisien;</li>
								<li><i class="bi bi-check-circle-fill"></i> Memperkuat sistem kontrol nasional dalam satu manajemen pengawasan yang terstruktur, sistematis, dan integratif berbasis teknologi;</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="feature-list">
								<li><i class="bi bi-check-circle-fill"></i> Meningkatkan keterlibatan masyarakat dan peserta Pemilu, serta meningkatkan sinergi kelembagaan dalam pengawasan Pemilu partisipatif;</li>
								<li><i class="bi bi-check-circle-fill"></i> Meningkatkan kepercayaan publik atas kualitas kinerja pengawasan berupa pencegahan dan penindakan, serta penyelesaian sengketa secara cepat, akurat dan transparan;</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
					<div class="image-wrapper">
						<div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
							<img src="<?= base_url() ?>assets/landing/img/gambar1.jpg" alt="Business Meeting" class="img-fluid main-image rounded-4">
						</div>
						<div class="experience-badge floating">
							<h3>Periode</h3>
							<p>Tahun 2023 - 2028</p>
						</div>
					</div>
				</div>
			</div>

		</div>

	</section><!-- /About Section -->


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
