<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1 class="font-bree text-center display-1 mt-5 mb-5">Lapor</h1>
    <br><br>
    <div class="container">
        <div class="row mt-5 pt-5 justify-content-center">
            <div class="col-md-8">
                <?= $this->session->flashdata('message');?>
            </div>
        </div>
        <div class="row mb-5 pb-5 justify-content-center">
            <div class="col-md-8">
                <form action="<?= base_url(); ?>lapor/kirim" method="post" class="justify-content-center">
                <input type="hidden" accept-charset="utf-8" name="kategori" id="kategori" value="Lapor">
                <div class="form-group">
                    <textarea name="pesan" id="pesan" class="form-control font-pd" aria-label="With textarea" placeholder="Ceritakan masalah yang terjadi disini"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100" name="kirim">kirim</button>
                </form>
            </div>
        </div>
    </div> 
    <br><br><br><br><br>
</body>
</html>