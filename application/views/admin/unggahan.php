<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <div class="container">
    <h4 class="font-weight-bold">Hasil : <?= $jml_cari; ?></h4>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Action</th>
        </tr>
        <?php foreach($unggahan as $u): ?>
        <tr>
            
            <td><?= ++$start; ?></td>
            <td><?= $u['nama']; ?></td>
            <td><?= $u['tanggal']; ?></td>
            <?php $judulLimit = $u['judul']; ?>
            <?php $judulLimit = word_limiter($judulLimit, 10); ?>
            <td><?= $judulLimit; ?></td>
            <?php $teksLimit = $u['teks']; ?>
            <?php $teksLimit = word_limiter($teksLimit, 10); ?>
            <td><?= $teksLimit; ?></td>
            <td><a href="<?= base_url(); ?>admin/hapusUnggahan/<?= $u['id'];?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a></td>
            
        </tr>
        <?php endforeach; ?>
    </table>
    <?= $this->pagination->create_links();?>
    </div>
</body>
</html>