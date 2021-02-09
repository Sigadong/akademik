<div class="container form">
	<div class="row">
		<div class="col">
			<a href="<?= base_url(); ?>prodi">
		 	  <i class="fas fa-arrow-circle-left fa-2x btn-outline-primary"></i>
		 	</a>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="card">
			  <div class="card-header text-white">
			    Form Ubah Data Prodi
			  </div>
			  <div class="card-body">
			  	<?= form_open_multipart(); ?>
					<input type="hidden" name="id" value="<?= $prodi['id']; ?>">
				  <div class="form-group">
				    <label for="kode_prodi">Kode Prodi</label>
				    <input type="text" class="form-control" name="kode_prodi" id="kode_prodi" value="<?= $prodi['kode_prodi']; ?>" autocomplete="off">
				    <small class="form-text text-danger"><?= form_error('kode_prodi'); ?></small>
				  </div>
				  <div class="form-group">
				    <label for="nama_prodi">Nama Prodi</label>
				    <input type="text" class="form-control" name="nama_prodi" value="<?= $prodi['nama_prodi']; ?>" id="nama_prodi" autocomplete="off">
				    <small class="form-text text-danger"><?= form_error('nama_prodi'); ?></small>
				  </div>
  				  <div class="form-group">
				    <label for="nama_fakultas">Nama Fakultas</label>
				    <input type="text" class="form-control" name="nama_fakultas" id="nama_fakultas" value="<?= $prodi['nama_fakultas']; ?>" autocomplete="off">
				    <small class="form-text text-danger"><?= form_error('nama_fakultas'); ?></small>
				  </div>			

				  <button type="submit" name="ubah" class="btn btn-primary float-right"><i class="fas fa-user"></i> Ubah Data</button>
				<?= form_close(); ?>
			  </div>
			</div>

		</div>
	</div>
</div>