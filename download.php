<?php

// Buat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "crud_php");

// Ambil semua data dari tabel produk
$data = mysqli_query($koneksi, "SELECT * FROM produk");

// Buat header PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial", "B", 16);
$pdf->Cell(0, 10, "Data Produk", 0, 1, "C");

// Buat tabel PDF
$pdf->SetFont("Arial", "", 12);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Cell(5, 10, "ID", 1, 0, "C", true);
$pdf->Cell(35, 10, "Nama", 1, 0, "C", true);
$pdf->Cell(20, 10, "Harga", 1, 0, "C", true);
$pdf->Cell(30, 10, "Gambar", 1, 1, "C", true);

// Tampilkan data ke PDF
while ($row = mysqli_fetch_assoc($data)) {
    $pdf->Cell(5, 10, $row['id'], 1, 0, "C");
    $pdf->Cell(35, 10, $row['nama'], 1, 0, "C");
    $pdf->Cell(20, 10, $row['harga'], 1, 0, "C");
    $pdf->Cell(30, 10, "<img src='gambar/" . $row['gambar'] . "' width='100'>", 1, 1, "C");
}

// Tutup koneksi ke database
mysqli_close($koneksi);

// Keluarkan PDF
$pdf->Output("data-produk.pdf", "I");
?>