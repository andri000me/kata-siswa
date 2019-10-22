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
            <th>idUnggahan</th>
            <th>Pesan</th>
            <th>Action</th>
        </tr>
        <?php foreach($diskusi as $d): ?>
        <tr>
            
            <td><?= ++$start; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['idUnggahan']; ?></td>
            <?php $pesanLimit = $d['pesan']; ?>
            <?php $pesanLimit = word_limiter($pesanLimit, 10); ?>
            <td><?= $pesanLimit; ?></td>
            <td><a href="<?= base_url(); ?>admin/hapusDiskusi/<?= $d['id'];?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a></td>
            
        </tr>
        <?php endforeach; ?>
    </table>
    <?= $this->pagination->create_links();?>
    </div>
</body>
</html>