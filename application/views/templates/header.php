<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Devs_ build"/>
    <meta name="theme-color" content="#b24dff"/>
    <link rel="apple-touch-icon" sizes="512x512" href="<?= base_url(); ?>assets/icons/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url(); ?>assets/icons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/icons/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bulma.scss">
	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <title><?php echo $judul; ?></title>
  </head>
  <body>

  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #6b0eac;">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>">
          <img src="<?= base_url(); ?>assets/icons/favicon-32x32.png" width="30" height="30" class="d-inline-block align-top" alt="devs">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url(); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>dosen">Dosen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
            </li>
            <li class="nav-item mr-5">
              <a class="nav-link" href="<?= base_url(); ?>prodi">Prodi</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-light btn-login" data-toggle="modal" data-target="#exampleModal" data-whatever="" href="<?= base_url(); ?>mahasiswa">Login</a>
            </li>
          </ul>
        </div>
        </div>
    </nav>
  </header>


<!-- Main = Contents -->
  <main id="content">

