<?php
require 'Model.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form Data Peminjaman</title>
    </head>
    <body>
        <h1>Form Data Peminjaman</h1>
        <form action = "" method = "post">
            <table>
            <div>
            <tr>
                <td><label for = "tgl_pinjam">TANGGAL PINJAM</label></td>
                <td><input type = "date" name = "tgl_pinjam" id = "tgl_pinjam" required></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "tgl_kembali">TANGGAL KEMBALI</label></td>
                <td><input type = "date" name = "tgl_kembali" id = "tgl_kembali" required></td>
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
        if (insertPeminjaman($_POST) > 0)
        {
            echo "<script> 
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'Peminjaman.php';
                    </script>
                ";
        }
        else
        {
            echo "<script> 
            alert('Data Gagal Ditambahkan');
            document.location.href = 'Peminjaman.php';
            </script>";
        }
    }
    ?>
</html>