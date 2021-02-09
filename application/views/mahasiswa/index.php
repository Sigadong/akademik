<div class="container datas">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

	<div class="row mt-3 justify-content-between">
		<div class="col-md-3">
			<a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data Mahasiswa</a>
		</div>

		<div class="col-md-4 mt-2">
			<form action="" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" name="keyword" placeholder="Cari Data Mahasiswa.." autocomplete="off">
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
				  </div>
				</div>	
			</form>	
		</div>
	</div>
	

<div class="row mt-3">		
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">No.</th>
	      <th scope="col">NPM</th>
	      <th scope="col">Nama</th>
	      <th scope="col">Jurusan</th>
	      <th scope="col">Aksi</th>
	    </tr>
	  </thead>
	  <tbody>
		<?php $nomor = 1; ?>
		<?php foreach( $mahasiswa as $mhs ) : ?>
	    <tr>

	      <td><?= $nomor++; ?></td>
	      <td><?= $mhs['npm']; ?></td>
	      <td><?= $mhs['nama']; ?></td>
	      <td><?= $mhs['jurusan']; ?></td>
	      <td>
	      	<a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary"><i class="fas fa-user-check"></i> Detail</a>
	      	<a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success"><i class="fas fa-user-check"></i> Ubah</a>
	      	<a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger tombol-hapus"><i class="fas fa-trash-restore-alt"></i> Hapus</a>
	      </td>
	    </tr>
		<?php endforeach; ?>

	  </tbody>
	</table>
  </div>

	<div class="row">
	 <div class="col">
		<?php if ( empty($mahasiswa) ): ?>
			<div class="alert alert-danger text-center" role="alert">
			  Data Mahasiswa tidak ditemukan!
			</div>
		<?php endif ?>
	 </div>
	</div>

</div>


<!-- 
		#icon utk simpan
	save
	user-plus ok

		#icon utk hapus
	trash-restore-alt ok
	trash-restore
	trash-alt
	user-times

		#icon utk kembali
	arrow-circle-left ok
	arrow-alt-circle-left ok
	chevron-circle-left
	angle-left
	angle-double-left
		
		#icon utk detail/cek
	user-check
	user-circle
	 -->


	<!--   <i class="fas fa-window-restore fa-5x"></i>
	  <i class="fas fa-terminal fa-5x"></i>
	  <i class="fas fa-layer-group fa-5x"></i>
	  <i class="fas fa-code fa-5x"></i>
	  <i class="fas fa-mobile-alt fa-5x"></i>
	  <i class="fas fa-desktop fa-5x"></i>
	  <div class="card-body">