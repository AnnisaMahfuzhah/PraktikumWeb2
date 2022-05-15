<?php
require 'Model.php';

$idMember = $_GET["id"];
$edit = queryMember("SELECT * FROM member WHERE id_member = $idMember")[0];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Data Member</title>
    </head>
    <body>
        <h1>Update Data Member</h1>
        <form action = "" method = "post">
            <input type = "hidden" name ="id_member" value = "<?php echo $edit["id_member"]?>">
            <table>
            <div>
            <tr>
                <td><label for = "nama_member">NAMA MEMBER</label></td>
                <td><input type = "text" name = "nama_member" id = "nama_member" required
                value = "<?php echo $edit["nama_member"];?>"></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "nomor_member">NOMOR MEMBER</label></td>
                <td><input type = "text" name = "nomor_member" id = "nomor_member" required
                value = "<?php echo $edit["nomor_member"];?>"></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "alamat">ALAMAT</label></td>
                <td><input type = "text" name = "alamat" id = "alamat" required
                value = "<?php echo $edit["alamat"];?>"></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "tgl_mendaftar">TANGGAL MENDAFTAR</label></td>
                <td><input type = "datetime-local" name = "tgl_mendaftar" id = "tgl_mendaftar" required
                value = "<?php echo $edit["tgl_mendaftar"];?>"></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "tgl_terakhir_bayar">TANGGAL TERAKHIR BAYAR</label></td>
                <td><input type = "date" name = "tgl_terakhir_bayar" id = "tgl_terakhir_bayar" required
                value = "<?php echo $edit["tgl_terakhir_bayar"];?>"></td>
            </tr>
            </div>
            </table>
            <br>
            <button type = "submit" name = "submit">Update</button>
        </form>
    </body>

    <?php
    if (isset($_POST["submit"]))
    {
        if (updateMember($_POST) > 0)
        {
            echo "<script> 
                    alert('Data Berhasil Diupdate');
                    document.location.href = 'Member.php';
                    </script>
                ";
        }
        else
        {
            echo "<script> 
            alert('Data Gagal Diupdate');
            document.location.href = 'Member.php';
            </script>";
        }
    }
    ?>
</html>