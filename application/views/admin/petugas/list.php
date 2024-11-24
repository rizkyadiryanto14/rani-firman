<?php $this->load->view('templates/header')?>
<?php $this->load->view('templates/navbar')?>
<?php $this->load->view('templates/sidebar')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Halaman Kelola Petugas</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Halaman Kelola Petugas</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">
								<button class="btn btn-primary" data-toggle="modal" data-target="#tambahpetugas">Tambah Petugas</button>
							</div>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="petugas">
									<thead>
									<tr>
										<th>No</th>
										<th>Username</th>
										<th>Email</th>
										<th>Role</th>
										<th>Action</th>
									</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>

<!--<div class="modal fade" id="tambahpetugas">-->
<!--	<div class="modal-dialog">-->
<!--		<div class="modal-content">-->
<!--			<div class="modal-header">-->
<!--				<div class="modal-title">-->
<!--					Form Tambah Petugas-->
<!--				</div>-->
<!--			</div>-->
<!--			<form action="--><?php //= base_url('admin/petugas') ?><!--" method="post">-->
<!--				<div class="modal-body">-->
<!--					<div class="form-group">-->
<!--						<label for="nama_lengkap">Nama Lengkap</label>-->
<!--						<input type="hidden" name="id_users" id="id_users" value="--><?php //= $this->session->userdata('id_users') ?><!--">-->
<!--						<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">-->
<!--					</div>-->
<!--					<div class="form-group">-->
<!--						<label for="alamat">Alamat</label>-->
<!--						<input type="text" name="alamat" id="alamat" class="form-control">-->
<!--					</div>-->
<!--					<div class="form-group">-->
<!--						<label for="jenis_kelamin">Jenis Kelamin</label>-->
<!--						<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">-->
<!--							<option selected disabled>Pilih Jenis Kelamin</option>-->
<!--							<option value="Laki-Laki">Laki-Laki</option>-->
<!--							<option value="Perempuan">Perempuan</option>-->
<!--						</select>-->
<!--					</div>-->
<!--					<div class="form-group">-->
<!--						<label for="tanggal_lahir">Tanggal Lahir</label>-->
<!--						<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">-->
<!--					</div>-->
<!--			</form>-->
<!--			</div>-->
<!--			<div class="modal-footer">-->
<!--				<button class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--				<button class="btn btn-primary" type="submit">Simpan</button>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->

<div class="modal fade" id="tambahpetugas">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title">
					Form Tambah Petugas
				</div>
			</div>
			<form action="<?= base_url('admin/register_petugas') ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" id="username" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" id="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button class="btn btn-primary" type="submit">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Masukkan DataTables JS di sini -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function () {
		var dataTable = $('#petugas').DataTable({
			"processing": true,
			"serverSide": true,
			"order": [],
			"ajax": {
				url: "<?php echo site_url('admin/get_data_petugas'); ?>",
				type: "POST"
			},
			"columnDefs": [{
				"targets": [0, 1, 2, 3, 4],
				"orderable": false,
			}],
		});
	});
</script>
<?php $this->load->view('templates/footer')?>

