<div class="container form">
	<div class="row">
		<div class="col">
			<a href="<?= base_url(); ?>mahasiswa">
		 	  <i class="fas fa-arrow-circle-left fa-2x btn-outline-primary"></i>
		 	</a>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="card">
			  <div class="card-header text-white">
			    Form Tambah Data Mahasiswa
			  </div>
			  <div class="card-body">
			  	<?= form_open_multipart('mahasiswa/tambah'); ?>
			  	<div class="form-group">
				    <label for="npm">NPM</label>
				    <input type="text" class="form-control <?= (form_error('npm')) ? 'is-invalid' : ''; ?>" name="npm" id="npm" autocomplete="off" value="<?= set_value('npm'); ?>" max_size="10" autofocus>
				    <div class="invalid-feedback">
				    	<?= form_error('npm'); ?>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : ''; ?>" name="nama" id="nama" autocomplete="off" value="<?= set_value('nama'); ?>">
				    <div class="invalid-feedback">
				    	<?= form_error('nama'); ?>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="text" class="form-control <?= (form_error('email')) ? 'is-invalid' : ''; ?>" name="email" id="email" autocomplete="off" placeholder="nama@cth.com" value="<?= set_value('email'); ?>">
				    <div class="invalid-feedback">
				    	<?= form_error('email'); ?>
				    </div>
				  </div>
  				  <div class="form-group">
				    <label for="alamat">Alamat</label>
				    <input type="text" class="form-control <?= (form_error('alamat')) ? 'is-invalid' : ''; ?>" name="alamat" id="alamat" autocomplete="off" value="<?= set_value('alamat'); ?>">
				    <div class="invalid-feedback">
				    	<?= form_error('alamat'); ?>
				    </div>
				  </div>
				  <div class="form-group">
			    	<label for="jenis_kelamin">Jenis Kelamin</label>
				    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
				      <option value="Laki-Laki">Laki-Laki</option>
				      <option value="Perempuan">Perempuan</option>
					</select>
				  </div>	
				  <div class="form-group">
			    	<label for="jurusan">Jurusan</label>
				    <select class="form-control" name="jurusan" id="jurusan">
				      <option value="Teknik Informatika">Teknik Informatika</option>
				      <option value="Teknik Industri">Teknik Industri</option>
				      <option value="Teknik Sipil">Teknik Sipil</option>
				      <option value="Teknik Elektro">Teknik Elektro</option>
				      <option value="Teknik Lingkungan">Teknik Lingkungan</option>
					</select>
				  </div>
				  <div class="form-group">
				    <label for="foto">Foto</label>
				    <div class="custom-file">
				    	<input type="file" class="form-control <?= (form_error('foto')) ? 'is-invalid' : ''; ?>" name="foto" id="foto" value="<?= set_value('foto'); ?>">
					     	
				    	<div class="invalid-feedback">				    		
				    		<?= form_error('foto'); ?>
					    </div>
				    </div>
				  </div>

				  <button type="submit" name="tambah" class="btn btn-primary float-right"><i class="fas fa-user-plus"></i> Tambah Data</button>
				<?= form_close(); ?>
			  </div>
			</div>
	
		</div>
	</div>
</div>