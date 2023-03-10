<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>MRD CRUD</title>
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
    <center>
        <h1>Data User</h1>
    </center>
    <a href="tambah_user.php">+ &nbsp; Create User</a>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        assign
    </button>
    </br>
    <!-- form filter data berdasarkan keyword  -->
    <div class="container mt-3 ms-3">
        <form action="index.php" method="get">
            <div class="row g-5 align-items-center">
                <div class="col-auto">
                    <label class="col-form-label" align='left'>Cari</label>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" name="cari" placeholder="Masukkan keyword nama/telp/alamat" required>
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary" type="submit" value="Cari">Cari</button>
                </div>
            </div>
        </form>
    </div>


    <!-- form filter data berdasarkan range tanggal  -->
    <div class="container mt-3 ms-3">
        <form action="search_tgl.php" method="get">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label class="col-form-label" align='left'>Periode</label>
                </div>
                <div class="col-auto">
                    <input type="date" class="form-control" name="dari" required>
                </div>
                <div class="col-auto">
                    -
                </div>
                <div class="col-auto">
                    <input type="date" class="form-control" name="ke" required>
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>
    </div>
    <br />
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
            if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $data = mysqli_query($koneksi, "SELECT * from user where nama LIKE '%" . $cari . "%' OR telp LIKE '%" . $cari . "%' OR alamat LIKE '%" . $cari . "%' ");
            } else {
                $data = mysqli_query($koneksi, "SELECT * from user");
            }
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-assign">
                            <label for="userAssign">Username</label>
                            <input type="text" class="form-control" id="userAssign" placeholder="enter username">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Assign</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>