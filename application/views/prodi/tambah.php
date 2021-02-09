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
			    Form Tambah Data Prodi
			  </div>
			  <div class="card-body">
			  	<?= form_open_multipart('prodi/tambah'); ?>
			  	<div class="form-group">
				    <label for="kode_prodi">Kode Prodi</label>
				    <input type="text" class="form-control <?= (form_error('kode_prodi')) ? 'is-invalid' : ''; ?>" name="kode_prodi" id="kode_prodi" autocomplete="off" value="<?= set_value('kode_prodi'); ?>" max_size="10" autofocus>
				    <div class="invalid-feedback">
				    	<?= form_error('kode_prodi'); ?>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="nama_prodi">Nama Prodi</label>
				    <input type="text" class="form-control <?= (form_error('nama_prodi')) ? 'is-invalid' : ''; ?>" name="nama_prodi" id="nama_prodi" autocomplete="off" value="<?= set_value('nama_prodi'); ?>">
				    <div class="invalid-feedback">
				    	<?= form_error('nama_prodi'); ?>
				    </div>
				  </div>				  
				  <div class="form-group">
				    <label for="nama_fakultas">Nama Fakultas</label>
				    <input type="text" class="form-control <?= (form_error('nama_fakultas')) ? 'is-invalid' : ''; ?>" name="nama_fakultas" id="nama_fakultas" autocomplete="off" value="<?= set_value('nama_fakultas'); ?>">
				    <div class="invalid-feedback">
				    	<?= form_error('nama_fakultas'); ?>
				    </div>
				  </div>
				  <button type="submit" name="tambah" class="btn btn-primary float-right"><i class="fas fa-user-plus"></i> Tambah Data</button>
				<?= form_close(); ?>
			  </div>
			</div>
	
		</div>
	</div>
</div>