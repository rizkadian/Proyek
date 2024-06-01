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
$pdf->Cell(190, 7, 'TIKET KONSER THE TICKET', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 12);

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(190, 7, 'DETAIL TIKET KONSER THE TICKET', 1, 1, 'C');
$pdf->Cell(90, 7, 'DETAIL PEMBELI', 1, 0, 'C');
$pdf->Cell(100, 7, 'DETAIL TIKET KONSER', 1, 1, 'C');

include '../koneksi.php';

$id = $_GET['id'];
$theticket = mysqli_query($con, "SELECT konser.harga, konser.nama AS nama1, konser.foto, konser.deskripsi, konser.waktu, konser.lokasi, tiket.nama AS nama2, tiket.id_tiket, tiket.email FROM konser, tiket WHERE tiket.id_tiket = $id AND tiket.id_konser = konser.id_konser");

while ($row = mysqli_fetch_array($theticket)) {
    $pdf->SetFont('Times', '', 10);
    $pdf->Cell(90, 7, '', 1, 0, 'C');
    $pdf->Cell(100, 7, $row['nama1'], 1, 1, 'C');

    $pdf->SetFont('Times', '', 10);
    $pdf->Cell(90, 7, $row['nama2'], 1, 0, 'C');
    $pdf->Cell(100, 7, $row['waktu'], 1, 1, 'C');

    $pdf->SetFont('Times', '', 10);
    $pdf->Cell(90, 7, $row['email'], 1, 0, 'C');
    $pdf->Cell(100, 7, $row['lokasi'], 1, 1, 'C');

    $pdf->SetFont('Times', '', 10);
    $pdf->Cell(90, 7, '', 1, 0, 'C');
    $pdf->Cell(100, 7, $row['harga'], 1, 1, 'C');

    $pdf->SetFont('Times', 'B', 10);
    $pdf->Cell(90, 10, 'Total Bayar', 1, 0, 'C');
    $pdf->Cell(100, 10, $row['harga'], 1, 1, 'C');
}
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(190, 7, 'Pembayaran dilakukan saat penukaran tiket dengan menunjukan bukti cetak tiket.', 1, 1, 'C');

$pdf->SetY(100);
$pdf->SetFont('Arial', 'I', 9);
$pdf->Cell(0, 7, '@ THE TICKET', 0, 0, 'C');

$pdf->Output();
