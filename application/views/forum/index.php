<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <div class="container">
        <h1 class="font-bree text-center display-1 mt-5 mb-5">Forum</h1>
        <div class="row">
            <div class="col-md-5"><hr class="border"></div>
            <div class="col-md-2"><h2 class="font-bree text-center text-secondary">Unggah</h2></div>
            <div class="col-md-5"><hr class="border"></div>
        </div>
        <form action="<?= base_url(); ?>forum/unggah" method="post">    
        <div class="row mt-5">
        <?= $this->session->flashdata('message');?>
            <div class="col-9">
                <input type="text" name = "judul" class="form-control font-pd" placeholder="judul" aria-label="Username" aria-describedby="basic-addon1">
                <textarea name="teks" id="teks" class="form-control font-pd" aria-label="With textarea" placeholder="Tulis sesuatu!"></textarea>
            </div>
            <div class="col-3">
                <button type="submit" class="btn btn-primary h-100 font-bree button-unggah" name="unggah">Unggah</button> 
            </div>
        </div>
        </form>
        <br>

        <div class="row">
            <div class="col-md-5"><hr class="border"></div>
            <div class="col-md-2"><h2 class="font-bree text-center text-secondary">Unggahan</h2></div>
            <div class="col-md-5"><hr class="border"></div>
        </div>
        <br>


        <div class="row">
            <?php foreach($unggahan as $u): ?>
            <div class="col-md-4">
                <div class="card mt-4 border border-primary">
                <div class="card-header bg-white">
                    <?php foreach($gambar as $g): ?>
                    <?php if($u['nama'] == $g['nama']):?>
                    <img src="<?= base_url(); ?>upload/<?= $g['gambar']?>" class="float-left rounded-circle mr-3" width="25" height="25" alt="" srcset="">
                    <?php endif; ?>
                    <?php endforeach; ?>
                    <p class="font-pd float-left"><?= $u['nama'];?></p>
                    <p class="float-right font-pd"><?= $u['tanggal'];?></p>
                </div>
                <div class="card-body mb-3">
                    <?php $judulLimit = $u['judul']; ?>
                    <?php $judulLimit = word_limiter($judulLimit, 10); ?>
                    <h4 class="card-text font-pd-black"><?= $judulLimit; ?></h4>

                    <?php $teksLimit = $u['teks']; ?>
                    <?php $teksLimit = word_limiter($teksLimit, 50); ?>
                    <p class="card-text text-justify font-pd"><?= $teksLimit; ?></p>
                </div> 
                <a href="<?= base_url(); ?>forum/diskusi/<?= $u['id']; ?>" class="btn btn-primary font-bree w-100 button-diskusi rounded-bottom">Mulai Diskusi</a>
                </div>
            </div>
            <?php endforeach; ?>
            
        </div>
        <br><br><br>
        <?= $this->pagination->create_links();?>
    </div>
    
</body>
</html>