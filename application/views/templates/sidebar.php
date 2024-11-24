<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<span class="brand-text font-weight-light">BawasluSumbawa</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?= $this->session->userdata('username') ?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="<?= base_url('dashboard') ?>" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<?php if ($this->session->userdata('role') == 'admin') { ?>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-address-card"></i>
						<p>
							Master
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url('admin/file') ?>" class="nav-link">
								<i class="far fa-file nav-icon"></i>
								<p>Data Files</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/petugas') ?>" class="nav-link">
								<i class="far fa-user nav-icon"></i>
								<p>Data Petugas</p>
							</a>
						</li>
					</ul>
				</li>
				<?php }else { ?>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-address-card"></i>
							<p>
								Master Petugas
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?= base_url('petugas/file') ?>" class="nav-link">
									<i class="far fa-file nav-icon"></i>
									<p>Data Files</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('petugas/profile') ?>" class="nav-link">
									<i class="far fa-user nav-icon"></i>
									<p>Profile</p>
								</a>
							</li>
						</ul>
					</li>
				<?php } ?>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
