<?php

include 'koneksi.php';
//include 'fitur_search.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <style type="text/css">
        * {
            font-family: "Trebuchet MS";
        }

        h1 {
            text-transform: uppercase;
            color: black;
        }

        table {
            border: solid 1px #DDEEEE;
            border-collapse: collapse;
            border-spacing: 0;
            width: 90%;
            margin: 40px auto 10px auto;
            margin-left: 30px;
            float: left;

        }

        table thead th {
            background-color: #DDEFEF;
            border: solid 1px #DDEEEE;
            color: #336B6B;
            padding: 10px;
            text-align: center;
            text-shadow: 1px 1px 1px #fff;
            text-decoration: none;
        }

        table tbody td {
            border: solid 1px #DDEEEE;
            color: #333;
            padding: 10px;
            text-shadow: 1px 1px 1px #fff;
        }

        a {
            background-color: salmon;
            color: #fff;
            padding: 10px;
            padding-bottom: 10px;
            text-decoration: none;
            font-size: 12px;
            margin-left: 30px;
        }

        button {
            background-color: salmon;
            color: #fff;
            padding: 10px;
            padding-bottom: 10px;
            text-decoration: none;
            font-size: 12px;
            margin-left: 30px;

        }
    </style>
</head>

<body>

    <table>

        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Telephon</th>
                <th>Password</th>
                <th>Alamat</th>
                <th>Nomor Identifikasi</th>
                <th>Tanggal Pendaftaran</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //jika tanggal dari dan tanggal ke ada maka
            if(isset($_GET['dari']) && isset($_GET['ke'])){
                // tampilkan data yang sesuai dengan range tanggal yang dicari 
                $data = mysqli_query($koneksi, "SELECT * FROM user WHERE tanggal_daftar BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'");
            }else{
                //jika tidak ada tanggal dari dan tanggal ke maka tampilkan seluruh data
                $data = mysqli_query($koneksi, "select * from user");		
            }
            // $no digunakan sebagai penomoran 
            $no = 1;
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['telp']; ?></td>
                    <td><?php echo $d['password']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['nik']; ?></td>
                    <td><?php echo $d['tanggal_daftar']; ?></td>
                    <td><?php echo "." ?></td>
                    <td><?php echo "<a href='form_edit.php?id=" . $d['id'] . "'>Edit</a> " ?>|
                        <?php echo "<a href='hapus.php?id=" . $d['id'] . "'>Hapus</a>"; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>