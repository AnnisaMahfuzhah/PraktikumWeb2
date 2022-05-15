<?php
$connection = mysqli_connect("localhost", "root", "", "perpustakaan");

// Fungsi CRUD Buku
function queryBuku($queryBuku)
{
    global $connection;

    $databuku = mysqli_query($connection, $queryBuku);
    $rows = [];
    while ($baris = mysqli_fetch_assoc($databuku))
    {
        $rows[] = $baris;
    }
    return $rows;
}

function insertBuku($dataBuku)
{
    global $connection;

    $judul_buku = htmlspecialchars($dataBuku["judul_buku"]);
    $penulis = htmlspecialchars($dataBuku["penulis"]);
    $penerbit = htmlspecialchars($dataBuku["penerbit"]);
    $tahun_terbit = htmlspecialchars($dataBuku["tahun_terbit"]);

    $queryBuku = "INSERT INTO buku VALUE ('', '$judul_buku', '$penulis', '$penerbit', '$tahun_terbit')";
    mysqli_query($connection, $queryBuku);

    return mysqli_affected_rows($connection);
}

function deleteBuku($idBuku)
{
    global $connection;
    mysqli_query($connection, "DELETE FROM buku WHERE id_buku = $idBuku");
    return mysqli_affected_rows($connection);
}

function updateBuku($dataBuku)
{
    global $connection;

    $id_buku = $dataBuku["id_buku"];
    $judul_buku = htmlspecialchars($dataBuku["judul_buku"]);
    $penulis = htmlspecialchars($dataBuku["penulis"]);
    $penerbit = htmlspecialchars($dataBuku["penerbit"]);
    $tahun_terbit = htmlspecialchars($dataBuku["tahun_terbit"]);

    $queryBuku = "UPDATE buku SET
                judul_buku = '$judul_buku',
                penulis = '$penulis',
                penerbit = '$penerbit',
                tahun_terbit = '$tahun_terbit'
                WHERE id_buku = $id_buku";
    mysqli_query($connection, $queryBuku);

    return mysqli_affected_rows($connection);
}

// Fungsi CRUD Member
function queryMember($queryMember)
{
    global $connection;

    $datamember = mysqli_query($connection, $queryMember);
    $rows = [];
    while ($baris = mysqli_fetch_assoc($datamember))
    {
        $rows[] = $baris;
    }
    return $rows;
}

function insertMember($dataMember)
{
    global $connection;

    $nama_member = htmlspecialchars($dataMember["nama_member"]);
    $nomor_member = htmlspecialchars($dataMember["nomor_member"]);
    $alamat = htmlspecialchars($dataMember["alamat"]);
    $tgl_mendaftar = htmlspecialchars($dataMember["tgl_mendaftar"]);
    $tgl_terakhir_bayar = htmlspecialchars($dataMember["tgl_terakhir_bayar"]);

    $queryMember = "INSERT INTO member VALUE ('', '$nama_member', '$nomor_member', '$alamat', '$tgl_mendaftar', '$tgl_terakhir_bayar')";
    mysqli_query($connection, $queryMember);

    return mysqli_affected_rows($connection);
}

function deleteMember($idMember)
{
    global $connection;
    mysqli_query($connection, "DELETE FROM member WHERE id_member = $idMember");
    return mysqli_affected_rows($connection);
}

function updateMember($dataMember)
{
    global $connection;

    $id_member = $dataMember["id_member"];
    $nama_member = htmlspecialchars($dataMember["nama_member"]);
    $nomor_member = htmlspecialchars($dataMember["nomor_member"]);
    $alamat = htmlspecialchars($dataMember["alamat"]);
    $tgl_mendaftar = htmlspecialchars($dataMember["tgl_mendaftar"]);
    $tgl_terakhir_bayar = htmlspecialchars($dataMember["tgl_terakhir_bayar"]);

    $queryMember = "UPDATE member SET
                nama_member = '$nama_member',
                nomor_member = '$nomor_member',
                alamat = '$alamat',
                tgl_mendaftar = '$tgl_mendaftar',
                tgl_terakhir_bayar = '$tgl_terakhir_bayar'
                WHERE id_member = $id_member";
    mysqli_query($connection, $queryMember);

    return mysqli_affected_rows($connection);
}

// Fungsi CRUD Peminjaman
function queryPeminjaman($queryPeminjaman)
{
    global $connection;

    $datapeminjaman = mysqli_query($connection, $queryPeminjaman);
    $rows = [];
    while ($baris = mysqli_fetch_assoc($datapeminjaman))
    {
        $rows[] = $baris;
    }
    return $rows;
}

function insertPeminjaman($dataPeminjaman)
{
    global $connection;

    $tgl_pinjam = htmlspecialchars($dataPeminjaman["tgl_pinjam"]);
    $tgl_kembali = htmlspecialchars($dataPeminjaman["tgl_kembali"]);

    $queryPeminjaman = "INSERT INTO peminjaman VALUE ('', '$tgl_pinjam', '$tgl_kembali')";
    mysqli_query($connection, $queryPeminjaman);

    return mysqli_affected_rows($connection);
}

function deletePeminjaman($idPeminjaman)
{
    global $connection;
    mysqli_query($connection, "DELETE FROM peminjaman WHERE id_peminjaman = $idPeminjaman");
    return mysqli_affected_rows($connection);
}

function updatePeminjaman($dataPeminjaman)
{
    global $connection;

    $id_peminjaman = $dataPeminjaman["id_peminjaman"];
    $tgl_pinjam = htmlspecialchars($dataPeminjaman["tgl_pinjam"]);
    $tgl_kembali = htmlspecialchars($dataPeminjaman["tgl_kembali"]);

    $queryPeminjaman = "UPDATE peminjaman SET
                tgl_pinjam = '$tgl_pinjam',
                tgl_kembali = '$tgl_kembali'
                WHERE id_peminjaman = $id_peminjaman";
    mysqli_query($connection, $queryPeminjaman);

    return mysqli_affected_rows($connection);
}
?>