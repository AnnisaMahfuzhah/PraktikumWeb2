<?php
require 'Model.php';
$idMember = $_GET["id"];

if (deleteMember($idMember) > 0)
{
    echo "<script> 
            alert('Data Berhasil DiHapus');
            document.location.href = 'Member.php';
            </script>
        ";
}

else
{
    echo "<script> 
            alert('Data Gagal Dihapus');
            document.location.href = 'Member.php';
            </script>
        ";
}
?>