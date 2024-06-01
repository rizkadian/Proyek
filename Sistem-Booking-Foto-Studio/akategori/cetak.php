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
$pdf->Cell(190, 7, 'DEPHOTO STUDIO', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 12);

$pdf->Cell(190, 7, 'DATA KATEGORI', 0, 1, 'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(10, 6, 'NO', 1, 0, 'C');
$pdf->Cell(20, 6, 'ID', 1, 0, 'C');
$pdf->Cell(80, 6, 'NAMA', 1, 0, 'C');
$pdf->Cell(80, 6, 'HARGA', 1, 1, 'C');
$pdf->SetFont('Times', '', 10);

include '../koneksi.php';
$no=1;
$mahasiswa = mysqli_query($con, "select * from kategori");

while ($row = mysqli_fetch_array($mahasiswa)) {
    $pdf->Cell(10, 6, $no++, 1, 0, 'C');
    $pdf->Cell(20, 6, $row['id_kategori'], 1, 0, 'C');
    $pdf->Cell(80, 6, $row['nama'], 1, 0, 'C');
    $pdf->Cell(80, 6, $row['harga'], 1, 1, 'C');
}
$pdf->Output();
