<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <div class="container">
    <br><br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="font-bree text-center mb-5">Profil</h2>
                <div class="form-group text-center">
                <img src="<?= base_url(); ?>upload/<?= $gambar;?>" class="rounded-circle mb-5" width="100" height="100" alt="" srcset=""></div>
                <?= $this->session->flashdata('message');?>
                <?= form_open_multipart('profil/tambah'); ?>
                <div class="form-group">
                    <input type="hidden" accept-charset="utf-8" name="id" id="id" value="<?= $id; ?>">
                    <input type="text" class="form-control" placeholder="nama" name="nama" value="<?= $user; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="nis" name="nis" value="<?= $nis; ?>">
                </div>
                <p class="font-bree"><i class="fas fa-upload"></i> unggah foto profil</p>
                <input type="file" name="gambar" id="gambar" class="font-bree mb-3">
                <span class="text-danger small">
                </span>
                <button type="submit" class="btn btn-primary w-100" name="submit">Ubah</button>
                <?= form_close(); ?>
            </div>
        </div>
        <br><br><br>
    </div>
</body>
</html>