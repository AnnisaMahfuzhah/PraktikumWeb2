<?php
require 'Model.php';
$member = queryMember("SELECT * FROM member");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data Member</title>
    </head>
    <body>
        <h1>Data Member</h1>
        <h2><a href = "FormMember.php">Insert Data Member</a></h2>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID MEMBER</th>
                <th>NAMA MEMBER</th>
                <th>NOMOR MEMBER</th>
                <th>ALAMAT</th>
                <th>TANGGAL MENDAFTAR</th>
                <th>TANGGAL TERAKHIR BAYAR</th>
                <th>AKSI</th>
            </tr>

            <?php foreach ($member as $baris) : ?>
            <tr>
                <td><?php echo $baris["id_member"];?></td>
                <td><?php echo $baris["nama_member"];?></td>
                <td><?php echo $baris["nomor_member"];?></td>
                <td><?php echo $baris["alamat"];?></td>
                <td><?php echo $baris["tgl_mendaftar"];?></td>
                <td><?php echo $baris["tgl_terakhir_bayar"];?></td>
                <td>
                    <a href = "EditMember.php?id= <?php echo $baris["id_member"];?>">Edit Data</a> |
                    <a href = "HapusMember.php?id= <?php echo $baris["id_member"];?>" onclick = "return confirm('Anda Yakin Ingin Menghapus Data?');">Hapus Data</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>