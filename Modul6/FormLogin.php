<?php
require 'Login.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form Login</title>
    </head>
    <body>
        <h1>Form Login</h1>
        <form action = "" method = "post">
            <table>
            <div>
            <tr>
            <td><label for = "nomor_member">NOMOR MEMBER</label></td>
                <td><input type = "text" name = "nomor_member" id = "nomor_member" required></td>
            </tr>
            </div>
            <div>
            <tr>
                <td><label for = "password_member">PASSWORD</label></td>
                <td><input type = "password" name = "password_member" id = "password_member" required></td>
            </tr>
            </div>
            </table>
            <br>
            <button type = "submit" name = "login">Login</button>
        </form>
    </body>

    <?php
    if (isset($_POST["login"]))
    {
        if (Login($_POST) > 0)
        {
            echo "<script> 
                    alert('Login Berhasil');
                    document.location.href = 'MenuAwal.php';
                    </script>
                ";
        }
        else
        {
            echo "<script> 
            alert('Login Gagal');
            document.location.href = 'MenuAwal.php';
            </script>";
        }
    }
    ?>