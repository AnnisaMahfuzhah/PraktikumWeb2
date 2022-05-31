<?php
require 'Model.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form Data Member</title>
    </head>
    <body>
        <h1>Form Data Member</h1>
        <form action = "" method = "post">
            <table>
            <div>
            <tr>
                <td><label for = "nama_member">NAMA MEMBER</label></td>
                <td><input type = "text" name = "nama_member" id = "nama_member" required></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "nomor_member">NOMOR MEMBER</label></td>
                <td><input type = "text" name = "nomor_member" id = "nomor_member" required></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "alamat">ALAMAT</label></td>
                <td><input type = "text" name = "alamat" id = "alamat" required></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "tgl_mendaftar">TANGGAL MENDAFTAR</label></td>
                <td><input type = "datetime-local" name = "tgl_mendaftar" id = "tgl_mendaftar" required></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "tgl_terakhir_bayar">TANGGAL TERAKHIR BAYAR</label></td>
                <td><input type = "date" name = "tgl_terakhir_bayar" id = "tgl_terakhir_bayar" required></td>
            </tr>
            <br>
            <button type = "submit" name = "submit">Submit</button>
        </form>
    </body>

    <?php
    if (isset($_POST["submit"]))
    {
        if (insertMember($_POST) > 0)
        {
            echo "<script> 
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'Member.php';
                    </script>
                ";
        }
        else
        {
            echo "<script> 
            alert('Data Gagal Ditambahkan');
            document.location.href = 'Member.php';
            </script>";
        }
    }
    ?>
</html>