<?php
// memanggil library FPDF
require('../fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L', 'mm', 'A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Times', 'B', 16);
// mencetak string
$pdf->Cell(275, 7, 'DEPHOTO STUDIO', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 12);

$pdf->Cell(275, 7, 'DATA BOOKING', 0, 1, 'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(10, 6, 'NO', 1, 0, 'C');
$pdf->Cell(10, 6, 'ID', 1, 0, 'C');
$pdf->Cell(40, 6, 'NAMA', 1, 0, 'C');
$pdf->Cell(45, 6, 'EMAIL', 1, 0, 'C');
$pdf->Cell(30, 6, 'TELEPON', 1, 0, 'C');
$pdf->Cell(25, 6, 'TANGGAL', 1, 0, 'C');
$pdf->Cell(30, 6, 'KATEGORI', 1, 0, 'C');
$pdf->Cell(20, 6, 'MULAI', 1, 0, 'C');
$pdf->Cell(25, 6, 'BERAKHIR', 1, 0, 'C');
$pdf->Cell(20, 6, 'PAYMENT', 1, 0, 'C');
$pdf->Cell(20, 6, 'HARGA', 1, 1, 'C');
$pdf->SetFont('Times', '', 10);

include '../koneksi.php';
$no=1;
$mahasiswa = mysqli_query($con, "SELECT booking.id_booking, booking.nama as nama1, booking.email, booking.telepon, booking.tanggal, kategori.nama as nama2, kategori.harga, jadwal.jam_mulai, jadwal.jam_berakhir, payment.nama as nama3 FROM booking, jadwal, payment, kategori WHERE booking.id_jadwal = jadwal.id_jadwal and booking.id_payment = payment.id_payment and booking.id_kategori = kategori.id_kategori ");

while ($row = mysqli_fetch_array($mahasiswa)) {
    $pdf->Cell(10, 6, $no++, 1, 0, 'C');
    $pdf->Cell(10, 6, $row['id_booking'], 1, 0, 'C');
    $pdf->Cell(40, 6, $row['nama1'], 1, 0, 'C');
    $pdf->Cell(45, 6, $row['email'], 1, 0, 'C');
    $pdf->Cell(30, 6, $row['telepon'], 1, 0, 'C');
    $pdf->Cell(25, 6, $row['tanggal'], 1, 0, 'C');
    $pdf->Cell(30, 6, $row['nama2'], 1, 0, 'C');
    $pdf->Cell(20, 6, $row['jam_mulai'], 1, 0, 'C');
    $pdf->Cell(25, 6, $row['jam_berakhir'], 1, 0, 'C');
    $pdf->Cell(20, 6, $row['nama3'], 1, 0, 'C');
    $pdf->Cell(20, 6, $row['harga'], 1, 1, 'C');
}
$pdf->Output();
