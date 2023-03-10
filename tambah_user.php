<html>
<head>
    <title>Form Input Data User</title>    
    <style type="text/css" media="screen">
        table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;}
        input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;height: 25px;}
    </style>
</head>
<body>
    
    <center> <h1>Form Input Data User</h1> 
    <center>   

    <form action="proses_tambah.php" method="POST">        
        <table>
            <tr height="45">
                <td width="120">Nama</td>
                <td><input type="text" name="nama" size="50"></td>
            </tr>
            <tr>
                <td>Telephon</td>
                <td><input type="text" name="telp" size="50"></td>
            </tr>

            <tr height="45">
                <td>Password</td>
                <td><input type="password" name="password" size="50"></td>
            </tr>
            <tr height="45">
                <td>Alamat</td>
                <td><input type="text" name="alamat" size="50"></td>
            </tr>
            <tr height="45">
                <td>Nomor Identifikasi</td>
                <td><input type="text" name="nik" size="50"></td>
            </tr>
            <tr height="45">
                <td>Tanggal Pendaftaran</td>
                <td><input type="date" name="tanggal_daftar" size="50"></td>
            </tr>
            <tr height="45" align="right">
                <td></td>
                <td><input type="submit" name="submit" value="Submit" size="50" ></td>
            </tr>
        </table>
    </form>
</body>
</html>