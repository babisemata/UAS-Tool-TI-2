<?php
include 'koneksi.php';

$id_barang = $_GET['delete'];

$delete = mysqli_query($koneksi, "DELETE FROM tb_mahasiswa WHERE NIM='$NIM'");

if (!$delete) {
    echo "Error: " . mysqli_error($koneksi);
} else {
    header("Location: tables.php");
}
?>