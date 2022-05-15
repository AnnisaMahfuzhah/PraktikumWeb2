<?php
require 'Model.php';
$buku = queryBuku("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data Buku</title>
    </head>
    <body>
        <h1>Data Buku</h1>
        <h2><a href = "FormBuku.php">Insert Data Buku</a></h2>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID BUKU</th>
                <th>JUDUL BUKU</th>
                <th>PENULIS</th>
                <th>PENERBIT</th>
                <th>TAHUN TERBIT</th>
                <th>AKSI</th>
            </tr>

            <?php foreach ($buku as $baris) : ?>
            <tr>
                <td><?php echo $baris["id_buku"];?></td>
                <td><?php echo $baris["judul_buku"];?></td>
                <td><?php echo $baris["penulis"];?></td>
                <td><?php echo $baris["penerbit"];?></td>
                <td><?php echo $baris["tahun_terbit"];?></td>
                <td>
                    <a href = "EditBuku.php?id= <?php echo $baris["id_buku"];?>">Edit Data</a> |
                    <a href = "HapusBuku.php?id= <?php echo $baris["id_buku"];?>" onclick = "return confirm('Anda Yakin Ingin Menghapus Data?');">Hapus Data</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>