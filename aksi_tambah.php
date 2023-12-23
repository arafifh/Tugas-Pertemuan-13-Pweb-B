<?php
// Buat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "crud_php");

// Ambil data dari form
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar']['name'];

// Validasi data
if (empty($nama)) {
    echo "<script>alert('Nama harus diisi!');</script>";
    exit;
}

if (empty($harga)) {
    echo "<script>alert('Harga harus diisi!');</script>";
    exit;
}

if ($gambar == "") {
    echo "<script>alert('Gambar harus dipilih!');</script>";
    exit;
}

// Upload gambar
$ekstensi = pathinfo($gambar, PATHINFO_EXTENSION);
$nama_baru = uniqid() . "." . $ekstensi;
move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/" . $nama_baru);

// Simpan data ke database
$query = "INSERT INTO produk (nama, harga, gambar) VALUES ('$nama', '$harga', '$nama_baru')";
mysqli_query($koneksi, $query);

// Redirect ke halaman
