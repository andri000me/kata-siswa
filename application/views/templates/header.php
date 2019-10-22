<!decotype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/offcanvas.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/BreeSerif-Reguler.ttf">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/PlayfairDisplay-Bold.ttf">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/PlayfairDisplay-Black.ttf">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/fontawesome-free/css/all.css">

    <title><?= $judul ?></title>
  </head>
  <body>
    
    <!-- Navbar -->
    <div class="bg-primary fixed-top">
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary text-white">
      <a class="nav-item nav-link text-white mr-5 ml-5" href="<?= base_url(); ?>forum"><img src="<?= base_url(); ?>assets/img/kata-siswa.png" width="30" height="30" class="d-inline-block align-top" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active mr-5 ml-5">
            <a class="nav-item nav-link text-white font-bree" href="<?= base_url(); ?>forum"><i class="fas fa-chalkboard-teacher"></i> Forum</a>
          </li>
          <li class="nav-item mr-5 ml-5">
            <a class="nav-item nav-link text-white font-bree" href="<?= base_url(); ?>kritik_saran"><i class="fas fa-envelope-open-text"></i> Kritik & Saran</a>
          </li>
          <li class="nav-item mr-5 ml-5">
            <a class="nav-item nav-link text-white font-bree" href="<?= base_url(); ?>lapor"><i class="fas fa-exclamation-circle"></i> Lapor</a>
          </li>
          <li class="nav-item dropdown mr-5 ml-5">
          <a class="nav-link dropdown-toggle text-white font-bree" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="<?= base_url(); ?>upload/<?= $this->session->userdata('gambar'); ?>" alt="" srcset="" width="25" height="25" class="rounded-circle"> <?= $user; ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?= base_url(); ?>profil"><i class="fas fa-user"></i> Profil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url(); ?>login/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>     
          </div>
        </li>
        </ul>
      </div>
    </nav>
    </div>
    </div>

    <!-- Akhir Navbar -->