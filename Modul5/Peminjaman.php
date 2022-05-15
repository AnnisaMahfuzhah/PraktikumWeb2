<?php
require 'Model.php';
$peminjaman = queryPeminjaman("SELECT * FROM peminjaman")
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data Peminjaman</title>
    </head>
    <body>
        <h1>Data Peminjaman</h1>
        <h2><a href = "FormPeminjaman.php">Insert Data Peminjaman</a></h2>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID PEMINJAMAN</th>
                <th>TANGGAL PINJAM</th>
                <th>TANGGAL KEMBALI</th>
                <th>AKSI</th>
            </tr>

            <?php foreach ($peminjaman as $baris) : ?>
            <tr>
                <td><?php echo $baris["id_peminjaman"];?></td>
                <td><?php echo $baris["tgl_pinjam"];?></td>
                <td><?php echo $baris["tgl_kembali"];?></td>
                <td>
                    <a href = "EditPeminjaman.php?id= <?php echo $baris["id_peminjaman"];?>">Edit Data</a> |
                    <a href = "HapusPeminjaman.php?id= <?php echo $baris["id_peminjaman"];?>" onclick = "return confirm('Anda Yakin Ingin Menghapus Data?');">Hapus Data</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>