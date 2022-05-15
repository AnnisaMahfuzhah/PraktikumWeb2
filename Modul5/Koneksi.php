<?php
try {
    $pdo_conn = new PDO('mysql:host=localhost;dbname=perpustakaan', 'root', '',
    array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTIOON, PDO::ATTR_PERSISTENT =>
    true));
}

catch (PDOException $e) {
    print "Koneksi atau Query Bermasalah : " . $e->getMessage(). "<br/>";
    die();
}
?>