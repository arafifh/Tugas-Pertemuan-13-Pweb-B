<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
</head>
<body>

<h1>Tambah Data</h1>

<form action="aksi_tambah.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="harga"></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td><input type="file" name="gambar"></td>
        </tr>
    </table>
    <input type="submit" value="Tambah">
</form>

</body>
</html>
