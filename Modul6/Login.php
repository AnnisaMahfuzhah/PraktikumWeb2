<?php

require 'Koneksi.php';

function Login($data)
{
    global $connection;

    $nomor_member = $_POST["nomor_member"];
    $password_member = $_POST["password_member"];

    $result = mysqli_query($connection, "SELECT * FROM member WHERE nomor_member = '$nomor_member' AND password_member = $password_member");

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fecth_assoc($result);

        if(password_verify($password_member, $row["password_member"])) {

            header("Location : MenuAwal.php");
        }
    }

    else {
        header("Location : ErrorPage.php");
    }
}

?>