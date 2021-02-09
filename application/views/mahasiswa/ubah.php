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
			    Form Ubah Data Mahasiswa
			  </div>
			  <div class="card-body">
			  	<?= form_open_multipart(); ?>
			  	<!-- <form action="" method="post"> -->
					<input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
				  <div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control" name="nama" id="nama" value="<?= $mahasiswa['nama']; ?>" autocomplete="off">
				    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
				  </div>
				  <div class="form-group">
				    <label for="npm">NPM</label>
				    <input type="text" class="form-control" name="npm" id="npm" value="<?= $mahasiswa['npm']; ?>" autocomplete="off">
				    <small class="form-text text-danger"><?= form_error('npm'); ?></small>
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="text" class="form-control" name="email" value="<?= $mahasiswa['email']; ?>" id="email" autocomplete="off">
				    <small class="form-text text-danger"><?= form_error('email'); ?></small>
				  </div>
				  <div class="form-group">
			    	<label for="jenis_kelamin">Jenis Kelamin</label>
				    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
				    	<?php foreach ($jenis_kelamin as $jenkel): ?>
				    		<?php if ($jenkel === $mahasiswa['jenis_kelamin']): ?>   		
						      <option value="<?= $jenkel; ?>" selected><?= $jenkel; ?></option>
				    		<?php else : ?>
						      <option value="<?= $jenkel; ?>"><?= $jenkel; ?></option>			
				    		<?php endif; ?>
				    	<?php endforeach; ?>
					</select>
				  </div>
				  <div class="form-group">
			    	<label for="jurusan">Jurusan</label>
				    <select class="form-control" name="jurusan" id="jurusan">
				    	<?php foreach ($jurusan as $jrs): ?>
				    		<?php if ($jrs === $mahasiswa['jurusan']): ?>   		
						      <option value="<?= $jrs; ?>" selected><?= $jrs; ?></option>
				    		<?php else : ?>
						      <option value="<?= $jrs; ?>"><?= $jrs; ?></option>			
				    		<?php endif; ?>
				    	<?php endforeach; ?>
					</select>
				  </div>		
  				  <div class="form-group">
				    <label for="alamat">Alamat</label>
				    <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $mahasiswa['alamat']; ?>" autocomplete="off">
				    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
				  </div>					
  				  <div class="form-group">
				    <label for="foto">Foto</label>
				    <div class="custom-file">
				    	<input type="file" class="form-control <?= (form_error('foto')) ? 'is-invalid' : ''; ?>" name="foto" id="foto" value="<?= set_value('foto'); ?>">   	
				    	<input type="hidden" name="foto_lama" value="<?= $mahasiswa['foto']; ?>">
				    	<div class="invalid-feedback">				    		
				    		<?= form_error('foto'); ?>
					    </div>
				    </div>
				  </div>

				  <button type="submit" name="ubah" class="btn btn-primary float-right"><i class="fas fa-user"></i> Ubah Data</button>
				<?= form_close(); ?>
			  </div>
			</div>

		</div>
	</div>
</div>