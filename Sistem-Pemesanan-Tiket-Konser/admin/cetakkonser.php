<?php
// memanggil library FPDF
require('../fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P', 'mm', 'A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Times', 'B', 16);
// mencetak string
$pdf->Cell(190, 7, 'DATA KONSER THE TICKET', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 12);

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(10, 7, 'NO', 1, 0, 'C');
$pdf->Cell(40, 7, 'NAMA', 1, 0, 'C');
$pdf->Cell(25, 7, 'HARGA', 1, 0, 'C');
$pdf->Cell(60, 7, 'LOKASI', 1, 0, 'C');
$pdf->Cell(30, 7, 'WAKTU', 1, 0, 'C');
$pdf->Cell(25, 7, 'FOTO', 1, 1, 'C');

include '../koneksi.php';

$theticket = mysqli_query($con, "SELECT * FROM konser");
$no=1;
while ($row = mysqli_fetch_array($theticket)) {
    $pdf->SetFont('Times', '', 10);
    $pdf->Cell(10, 7, $no++, 1, 0, 'C');
    $pdf->Cell(40, 7, $row['nama'], 1, 0, 'C');
    $pdf->Cell(25, 7, $row['harga'], 1, 0, 'C');
    $pdf->Cell(60, 7, $row['lokasi'], 1, 0, 'C');
    $pdf->Cell(30, 7, $row['waktu'], 1, 0, 'C');
    $pdf->Cell(25, 7, $row['foto'], 1, 1, 'C');
}
$pdf->SetY(100);
$pdf->SetFont('Arial', 'I', 9);
$pdf->Cell(0, 7, '@ THE TICKET', 0, 0, 'C');

$pdf->Output();
