<?php

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];
$nik = $_POST['nik'];
$tanggal_daftar = $_POST['tanggal_daftar'];

$query = "UPDATE user SET nama='$nama', telp='$telp', password='$password', alamat='$alamat', nik='$nik', tanggal_daftar='$tanggal_daftar' ";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) ." - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Update Data Berhasil.');window.location='index.php';</script>";
}
