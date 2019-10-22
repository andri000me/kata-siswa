<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <div class="container">
    <table class="table">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Pesan</th>
            <th>Action</th>
        </tr>
        <?php $i = 1; foreach($pesan as $p): ?>
        <?php if($p['kategori'] == "Kritik & Saran"):?>
        <tr>
            
            <td><?= $i++; ?></td>
            <td><?= $p['nama']; ?></td>
            <td><?= $p['pesan']; ?></td>
            <td></td>
            
        </tr>
        <?php endif; ?>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>