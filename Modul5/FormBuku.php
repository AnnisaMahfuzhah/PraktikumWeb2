<?php
require 'Model.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form Data Buku</title>
    </head>
    <body>
        <h1>Form Data Buku</h1>
        <form action = "" method = "post">
            <table>
            <div>
            <tr>
                <td><label for = "judul_buku">JUDUL BUKU</label></td>
                <td><input type = "text" name = "judul_buku" id = "judul_buku" required></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "penulis">PENULIS</label></td>
                <td><input type = "text" name = "penulis" id = "penulis" required></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "penerbit">PENERBIT</label></td>
                <td><input type = "text" name = "penerbit" id = "penerbit" required></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "tahun_terbit">TAHUN TERBIT</label></td>
                <td><input type = "text" name = "tahun_terbit" id = "tahun_terbit" required></td>
            </tr>
            </div>
            </table>
            <br>
            <button type = "submit" name = "submit">Submit</button>
        </form>
    </body>

    <?php
    if (isset($_POST["submit"]))
    {
        if (insertBuku($_POST) > 0)
        {
            echo "<script> 
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'Buku.php';
                    </script>
                ";
        }
        else
        {
            echo "<script> 
            alert('Data Gagal Ditambahkan');
            document.location.href = 'Buku.php';
            </script>";
        }
    }
    ?>
</html>