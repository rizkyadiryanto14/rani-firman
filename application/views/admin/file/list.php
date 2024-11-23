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
					<h1 class="m-0">Halaman Kelola File</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Halaman Kelola File</li>
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
							<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#tambahfile">Tambah File</button>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="file" class="table table-bordered">
									<thead>
									<tr>
										<th>No</th>
										<th>Kategori</th>
										<th>Nama File</th>
										<th>File</th>
										<th>Status</th>
										<th>Keterangan</th>
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

<div class="modal fade" id="tambahfile">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title">
					Form Tambah File
				</div>
			</div>
			<form action="<?= base_url('admin/insert_file') ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
						<label for="kategori">Kategori</label>
						<input type="text" name="kategori" id="kategori" class="form-control">
					</div>
					<div class="form-group">
						<label for="nama_file">Nama File</label>
						<input type="text" name="nama_file" id="nama_file" class="form-control">
					</div>
					<div class="form-group">
						<label for="file">File</label>
						<input
							type="file"
							name="file"
							id="file"
							class="form-control"
							accept=".jpg, .jpeg, .png, .pdf, .doc, .docx, .xls, .xlsx, .txt"
							onchange="validateFileSize(this)"
						>
						<small class="form-text text-muted">
							Hanya file dengan ekstensi: jpg, jpeg, png, pdf, doc, docx, xls, xlsx, txt. Maksimal ukuran file adalah 8MB.
						</small>
					</div>
					<div class="form-group">
						<label for="status">status</label>
						<select name="status" id="status" class="form-control">
							<option selected disabled>Pilih Status</option>
							<option value="1">Private</option>
							<option value="0">Public</option>
						</select>
					</div>
					<div class="form-group">
						<label for="keterangan">Keterangan</label>
						<input type="text" name="keterangan" id="keterangan" class="form-control">
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

	function validateFileSize(input) {
		const maxSize = 8 * 1024 * 1024;
		if (input.files && input.files[0]) {
			if (input.files[0].size > maxSize) {
				alert('Ukuran file maksimal adalah 8MB.');
				input.value = '';
			}
		}
	}

	$(document).ready(function () {
		var dataTable = $('#file').DataTable({
			"processing": true,
			"serverSide": true,
			"order": [],
			"ajax": {
				url: "<?php echo site_url('admin/get_data_file'); ?>",
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

