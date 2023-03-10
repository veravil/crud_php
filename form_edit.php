<?php
include 'koneksi.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_array($result);
    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>MRD CRUD</title>
    <style type="text/css" media="screen">
        table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;}
        input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;height: 25px;}
    </style>
</head>
<body>
    <center>
        <h1>Edit Data User </h1>
        <center>
            <form method="POST" action="proses_edit.php" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $row['id'];?>" name="id">
            <table >
            <tr height="45">
                <td width="120">Nama</td>
                <td><input type="text" name="nama" value="<?php echo $row['nama'];?>" size="50"></td>
            </tr>
            <tr height="45">
                <td>Telephon</td>
                <td><input type="text" name="telp" value="<?php echo $row['telp'];?>" size="50"></td>
            </tr>
            <tr height="45">
                <td>Password</td>
                <td><input type="password" name="password" value="<?php echo $row['password'];?>" size="50"></td>
            </tr>
            <tr height="45">
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $row['alamat'];?>" size="50"></td>
            </tr>
            <tr height="45">
                <td>Nomor Identifikasi</td>
                <td><input type="text" name="nik" value="<?php echo $row['nik'];?>" size="50"></td>
            </tr>
            <tr height="45">
                <td>Tanggal Pendaftaran</td>
                <td><input type="date" name="tanggal_daftar" value="<?php echo $row['tanggal_daftar'];?>" size="50"></td>
            </tr>
            <tr height="45" align="right">
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
            </table>
            </form>
</body>

</html>