<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <div class="container">
        <br><br>
        <div class="card border border-primary">
        <div class="card-header bg-white">
            <?php foreach($gambar as $g): ?>
            <?php if($unggahan['nama'] == $g['nama']):?>
            <img src="<?= base_url(); ?>upload/<?= $g['gambar']?>" class="float-left rounded-circle mr-3" width="25" height="25" alt="" srcset="">
            <?php endif; ?>
            <?php endforeach; ?>       
            <p class="float-left font-pd"><?= $unggahan['nama']; ?></p>
            <p class="float-right font-pd"><?= $unggahan['tanggal'];?></p>
        </div>
        <div class="card-body">
            <h3 class="font-pd-black"><?= $unggahan['judul']; ?></h3>
            <p class="card-text text-justify font-pd"><?= $unggahan['teks']; ?></p>
        </div>
        </div>
        <div class="card border border-primary">
        <div class="card-body">
            <form action="<?= base_url(); ?>forum/kirim/<?= $unggahan['id'] ?>" method="post">
            <div class="input-group mb-3">
            <input type="hidden" accept-charset="utf-8" name="id" id="id" value="<?= $unggahan['id'] ?>">
            <input type="text" class="form-control font-pd" placeholder="tulis pesan" aria-label="tulis pesan" aria-describedby="button-addon2" name='pesan'>
            <div class="input-group-append">
                <button class="btn btn-primary font-bree" type="submit" id="button-addon2" name="kirim">Kirim</button>
            </div>
            </form>
            </div>
            <?php foreach($diskusi as $d): ?>
             <?php if ($unggahan['id'] == $d['idUnggahan']):?>
                <?php foreach($gambar as $g): ?>
                <?php if($d['nama'] == $g['nama']):?>
                <img src="<?= base_url(); ?>upload/<?= $g['gambar']?>" class="rounded-circle" width="25" height="25" alt="" srcset="">
                <?php endif; ?>
                <?php endforeach; ?>  
                <p class="small font-weight-bold font-pd d-inline"><?= $d['nama']; ?><br></p><br>
                <div class="alert d-inline-flex message-box border" role="alert">
                <p class="small p-user font-pd text-dark"><?= $d['pesan']; ?></p>
                </div><br>
             <?php endif;?>
            <?php endforeach;?>

        </div>
        </div>
    </div>
</body>
</html>