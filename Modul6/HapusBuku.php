<?php
require 'Model.php';
$idBuku = $_GET["id"];

if (deleteBuku($idBuku) > 0)
{
    echo "<script> 
            alert('Data Berhasil DiHapus');
            document.location.href = 'Buku.php';
            </script>
        ";
}

else
{
    echo "<script> 
            alert('Data Gagal Dihapus');
            document.location.href = 'Buku.php';
            </script>
        ";
}
?>