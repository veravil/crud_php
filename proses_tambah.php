<?php

include 'koneksi.php';

// membuat variabel untuk menampung data dari form
$nama   = mysqli_real_escape_string($koneksi, $_POST['nama']);
$telp     = $_POST['telp'];
$password    = mysqli_real_escape_string($koneksi, $_POST['password']);
$alamat    = $_POST['alamat'];
$nik = $_POST['nik'];
$tanggal_daftar    = date($_POST['tanggal_daftar']);




$query = "INSERT INTO user (nama, telp, password, alamat, nik, tanggal_daftar) VALUES ('$nama', '$telp', '$password', '$alamat', '$nik', '$tanggal_daftar')";
$result = mysqli_query($koneksi, $query);

if (!$result) {
  die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
    " - " . mysqli_error($koneksi));
} else {

  echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
}
?>
