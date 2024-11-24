<?php $this->load->view('templates/header') ?>
<?php $this->load->view('templates/navbar') ?>
<?php $this->load->view('templates/sidebar') ?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Halaman Edit File</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Halaman Edit File</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">
								Form update <?= $files['nama_file'] ?>
							</div>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="kategori">Kategori</label>
								<input type="text" name="kategori" id="kategori" class="form-control" value="<?= $files['kategori'] ?>">
							</div>
							<div class="form-group">
								<label for="nama_file">Nama File</label>
								<input type="text" name="nama_file" id="nama_file" class="form-control" value="<?= $files['nama_file'] ?>">
							</div>
							<div class="form-group">
								<label for="file">File</label>
								<input type="file" name="file" id="file" class="form-control">
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
								<input type="text" name="keterangan" id="keterangan" class="form-control" value="<?= $files['keterangan'] ?>">
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button class="btn btn-primary" type="submit">Update</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


</div>

<?php $this->load->view('templates/footer') ?>
