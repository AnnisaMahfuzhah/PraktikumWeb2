<?php
require 'Model.php';
$idPeminjaman = $_GET["id"];

if (deletePeminjaman($idPeminjaman) > 0)
{
    echo "<script> 
            alert('Data Berhasil DiHapus');
            document.location.href = 'Peminjaman.php';
            </script>
        ";
}

else
{
    echo "<script> 
            alert('Data Gagal Dihapus');
            document.location.href = 'Peminjaman.php';
            </script>
        ";
}
?>