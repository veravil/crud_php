<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $nama_db = "db_crud";
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); 
 
  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysqli_connect_error());
  }
?>