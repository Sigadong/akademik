<div class="container datas">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

	<div class="row mt-3 justify-content-between">
		<div class="col-md-3">
			<a href="<?= base_url(); ?>prodi/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data Prodi</a>
		</div>

		<div class="col-md-4 mt-2">
			<form action="" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" name="keyword" placeholder="Cari Data Prodi.." autocomplete="off">
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
	      <th scope="col">Kode Prodi</th>
	      <th scope="col">Nama Prodi</th>
	      <th scope="col">Nama Fakultas</th>
	      <th scope="col">Aksi</th>
	    </tr>
	  </thead>
	  <tbody>
		<?php $nomor = 1; ?>
		<?php foreach( $prodi as $prd ) : ?>
	    <tr>
	      <td><?= $nomor++; ?></td>
	      <td><?= $prd['kode_prodi']; ?></td>
	      <td><?= $prd['nama_prodi']; ?></td>
	      <td><?= $prd['nama_fakultas']; ?></td>
	      <td>
	      	<a href="<?= base_url(); ?>prodi/detail/<?= $prd['id']; ?>" class="badge badge-primary"><i class="fas fa-user-check"></i> Detail</a>
	      	<a href="<?= base_url(); ?>prodi/ubah/<?= $prd['id']; ?>" class="badge badge-success"><i class="fas fa-user-check"></i> Ubah</a>
	      	<a href="<?= base_url(); ?>prodi/hapus/<?= $prd['id']; ?>" class="badge badge-danger tombol-hapus"><i class="fas fa-trash-restore-alt"></i> Hapus</a>
	      </td>
	    </tr>
		<?php endforeach; ?>
	  </tbody>
	</table>
  </div>

	<div class="row">
	 <div class="col">
		<?php if ( empty($prodi) ): ?>
			<div class="alert alert-danger text-center" role="alert">
			  Data Program Studi tidak ditemukan!
			</div>
		<?php endif ?>
	 </div>
	</div>


</div>

