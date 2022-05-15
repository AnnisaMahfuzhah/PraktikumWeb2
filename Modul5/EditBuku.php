<?php
require 'Model.php';

$idBuku = $_GET["id"];
$edit = queryBuku("SELECT * FROM buku WHERE id_buku = $idBuku")[0];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Data Buku</title>
    </head>
    <body>
        <h1>Update Data Buku</h1>
        <form action = "" method = "post">
            <input type = "hidden" name ="id_buku" value = "<?php echo $edit["id_buku"]?>">
            <table>
            <div>
            <tr>
                <td><label for = "judul_buku">JUDUL BUKU</label></td>
                <td><input type = "text" name = "judul_buku" id = "judul_buku" required
                value = "<?php echo $edit["judul_buku"];?>"></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "penulis">PENULIS</label></td>
                <td><input type = "text" name = "penulis" id = "penulis" required
                value = "<?php echo $edit["penulis"];?>"></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "penerbit">PENERBIT</label></td>
                <td><input type = "text" name = "penerbit" id = "penerbit" required
                value = "<?php echo $edit["penerbit"];?>"></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "tahun_terbit">TAHUN TERBIT</label></td>
                <td><input type = "text" name = "tahun_terbit" id = "tahun_terbit" required
                value = "<?php echo $edit["tahun_terbit"];?>"></td>
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
        if (updateBuku($_POST) > 0)
        {
            echo "<script> 
                    alert('Data Berhasil Diupdate');
                    document.location.href = 'Buku.php';
                    </script>
                ";
        }
        else
        {
            echo "<script> 
            alert('Data Gagal Diupdate');
            document.location.href = 'Buku.php';
            </script>";
        }
    }
    ?>
</html>