<div class="container form">
	<div class="row justify-content-start mb-2">
		<div class="col-md-1">
			<a href="<?= base_url(); ?>mahasiswa">
		 	  <i class="fas fa-arrow-circle-left fa-2x btn-outline-primary"></i>
		 	</a>
		</div>
		<div class="col-md-4 px-2 judul">
			<h4>Detail Data Mahasiswa</h4>
		</div>
	</div>
	<div class="card mb-3 p-4">
	  <div class="row no-gutters justify-content-between">
	    <div class="col-md-5">
	      <img src="<?= base_url(); ?>/assets/image/<?= $mahasiswa['foto']; ?>" class="card-img" alt="<?= $mahasiswa['nama']; ?>" width="100px">
	    </div>
	    <div class="col-md-6">
	      <div class="card-body">
	        <h3 class="card-title">NPM : <?= $mahasiswa['npm']; ?></h3>
	        <h4 class="card-title">Nama : <?= $mahasiswa['nama']; ?></h4>
	        <h4 class="card-text">Email : <?= $mahasiswa['email']; ?></h4>
	        <h4 class="card-text">Jurusan : <?= $mahasiswa['jurusan']; ?></h4>
	        <h4 class="card-text">Jenis Kelamin : <?= $mahasiswa['jenis_kelamin']; ?></h4>
	        <h4 class="card-text">Alamat : <?= $mahasiswa['alamat']; ?></h4>
	        <p class="card-text float-right"><small class="text-muted">Last updated 2 weeks ago</small></p>
	      </div>
	    </div>
	  </div>
	</div>


</div>