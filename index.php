<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP Native</title>
</head>
<body>

<h1>CRUD PHP Native</h1>

<a href="tambah.php">Tambah Data</a>
<a href="download.php">Download Data</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Gambar</th>
    </tr>

    <?php
    // Buat koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "crud_php");

    // Ambil semua data dari tabel produk
    $data = mysqli_query($koneksi, "SELECT * FROM produk");

    // Looping untuk menampilkan data
    while ($row = mysqli_fetch_assoc($data)) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['harga']; ?></td>
            <td><img src="gambar/<?php echo $row['gambar']; ?>" width="100"></td>
        </tr>
        <?php
    }

    // Tutup koneksi ke database
    mysqli_close($koneksi);
    ?>
</table>
</body>
</html>
