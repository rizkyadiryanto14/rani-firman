<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
	</ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<!-- Messages Dropdown Menu -->
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<span class="text-dark"><?= $this->session->userdata('username') ?></span>
				<i class="far fa-user text-dark"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				<a href="<?= base_url('auth/logout')?>" class="dropdown-item">
					<i class="fas fa-sign-out-alt text-danger"></i>
					Logout
				</a>
			</div>
		</li>
	</ul>
</nav>
<!-- /.navbar -->
