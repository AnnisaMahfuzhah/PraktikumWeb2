<?php
session_start();
if(!isset($_SESSION['nomor_member'])) {
    header('Location: FormLogin.php');
    exit;
} else {
    // Show users the page
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Perpustakaan</title>
    </head>
    <body>
        <h1>Perpustakaan</h1>
        <h2>
        <a href = "FormMember.php">Daftar</a><br><br>
        <a href = "Buku.php">Data Buku</a><br>
        <a href = "Member.php">Data Member</a><br>
        <a href = "Peminjaman.php">Data Peminjaman</a>
        </h2>
    </body>
</html>