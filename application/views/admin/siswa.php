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
            <th>NIS</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php foreach($siswa as $s): ?>
        <tr>
            
            <td><?= ++$start; ?></td>
            <td><?= $s['nis']; ?></td>
            <td><?= $s['nama']; ?></td>
            <td><img src="<?= base_url(); ?>upload/<?= $s['gambar']; ?>" alt="" width="25" height="25" class="rounded-circle"></td>
            <td><?= $s['password']; ?></td>
            <td><a href="<?= base_url(); ?>admin/hapusSiswa/<?= $s['id'];?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a></td>
            
        </tr>
        <?php endforeach; ?>
    </table>
    <?= $this->pagination->create_links();?>
    </div>
</body>
</html>