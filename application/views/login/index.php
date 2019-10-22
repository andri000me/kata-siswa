<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <div class="jumbotron w-100 mb-5 p-5">
    <h1>
    <a href="" style="text-decoration: none; color:#fff;" class="typewrite font-bree text-center w-100 h-100" data-period="2000" data-type='[ "KATA SISWA", "by Ahmad Nuhisya", "FORUM", "KRITIK & SARAN", "LAPOR" ]'>
        <span class="wrap"></span>
    </a>
    </h1>
    <div class="row">
        <div class="col-6">
            <hr class="border border-white">
        </div>
    </div>
    <p class="font-pd text-white p-header">Kata Siswa, tempat diskusi siswa, wadah saran dan kritik, lebih cepat untuk melapor</p>
    <a class="btn btn-primary btn-lg text-white font-bree page-scroll" href="#main" role="button">Mulai</a>
    </div>
    <div class="container" id="main">
    <br><br><br><br><br><br>
    <h1 class="font-bree text-center">Masuk atau Daftar untuk menjelajahi</h1>
        <div class="row mt-5 mb-5 pt-5 pb-5 justify-content-center">
            <div class="col-md-4">
                <h2 class="font-bree text-center mb-5">Login</h2>
                <form action="<?= base_url(); ?>login/submit" method="post" class="justify-content-center">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="nis" name="usernis">
                    <?= form_error('usernis', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary w-100" name="submit">Masuk</button>
                </form>
            </div>


            <div class="col-md-1"></div>


            <div class="col-md-4">
                <h2 class="font-bree text-center mb-5">Sign Up</h2>
                <?= $this->session->flashdata('message');?>
                <form action="<?= base_url(); ?>login/registrasi" method="post" class="justify-content-center">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="nama" name="nama">
                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="nis" name="nis">
                    <?= form_error('nis', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="password" name="password1">
                    <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="ulangi password" name="password2">
                    <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary w-100" name="registrasi">Daftar</button>
                </form>
            </div>
        </div>
    </div> 
    <br><br><br><br><br>
</body>
</html>