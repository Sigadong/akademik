<div class="container form">
	<div class="row">
		<div class="col">
			<a href="<?= base_url(); ?>dosen">
		 	  <i class="fas fa-arrow-circle-left fa-2x btn-outline-primary"></i>
		 	</a>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="card">
			  <div class="card-header text-white">
			    Form Tambah Data Dosen
			  </div>
			  <div class="card-body">
			  	<?= form_open_multipart('dosen/tambah'); ?>
			  	<div class="form-group">
				    <label for="nidn">NIDN</label>
				    <input type="text" class="form-control <?= (form_error('nidn')) ? 'is-invalid' : ''; ?>" name="nidn" id="nidn" autocomplete="off" value="<?= set_value('nidn'); ?>" max_size="10" autofocus>
				    <div class="invalid-feedback">
				    	<?= form_error('nidn'); ?>
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
				    <input type="text" class="form-control <?= (form_error('email')) ? 'is-invalid' : ''; ?>" name="email" id="email" autocomplete="off" value="<?= set_value('email'); ?>" placeholder="nama@cth.com">
				    <div class="invalid-feedback">
				    	<?= form_error('email'); ?>
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
				    <label for="telp">Telp.</label>
				    <input type="text" class="form-control <?= (form_error('telp')) ? 'is-invalid' : ''; ?>" name="telp" id="telp" autocomplete="off" value="<?= set_value('telp'); ?>" max_size="10">
				    <div class="invalid-feedback">
				    	<?= form_error('telp'); ?>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="alamat">Alamat</label>
				    <input type="text" class="form-control <?= (form_error('alamat')) ? 'is-invalid' : ''; ?>" name="alamat" id="alamat" autocomplete="off" value="<?= set_value('alamat'); ?>" max_size="10">
				    <div class="invalid-feedback">
				    	<?= form_error('alamat'); ?>
				    </div>
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