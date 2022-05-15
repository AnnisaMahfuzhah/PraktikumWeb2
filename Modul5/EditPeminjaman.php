<?php
require 'Model.php';

$idPeminjaman = $_GET["id"];
$edit = queryPeminjaman("SELECT * FROM peminjaman WHERE id_peminjaman = $idPeminjaman")[0];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Data Buku</title>
    </head>
    <body>
        <h1>Update Data Buku</h1>
        <form action = "" method = "post">
            <input type = "hidden" name ="id_peminjaman" value = "<?php echo $edit["id_peminjaman"]?>">
            <table>
            <div>
            <tr>
                <td><label for = "tgl_pinjam">TANGGAL PINJAM</label></td>
                <td><input type = "date" name = "tgl_pinjam" id = "tgl_pinjam" required
                value = "<?php echo $edit["tgl_pinjam"];?>"></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "penulis">TANGGAL KEMBALI</label></td>
                <td><input type = "date" name = "tgl_kembali" id = "tgl_kembali" required
                value = "<?php echo $edit["tgl_kembali"];?>"></td>
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
        if (updatePeminjaman($_POST) > 0)
        {
            echo "<script> 
                    alert('Data Berhasil Diupdate');
                    document.location.href = 'Peminjaman.php';
                    </script>
                ";
        }
        else
        {
            echo "<script> 
            alert('Data Gagal Diupdate');
            document.location.href = 'Peminjaman.php';
            </script>";
        }
    }
    ?>
</html>