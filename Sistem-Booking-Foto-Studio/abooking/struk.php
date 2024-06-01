<?php
$id = $_GET['id'];
// memanggil library FPDF
require('../fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L', 'mm', 'A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Times', 'B', 16);
// mencetak string
$pdf->Cell(200, 7, 'DEPHOTO STUDIO', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 12);

$pdf->Cell(200, 7, 'STRUK BOOKING', 0, 1, 'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', 'B', 10);
$pdf->SetFont('Times', '', 10);

include '../koneksi.php';
$mahasiswa = mysqli_query($con, "SELECT booking.nama as nama1, booking.tanggal, kategori.nama as nama2, kategori.harga, jadwal.jam_mulai, jadwal.jam_berakhir, payment.nama as nama3 FROM booking, jadwal, payment, kategori WHERE booking.id_jadwal = jadwal.id_jadwal and booking.id_payment = payment.id_payment and booking.id_kategori = kategori.id_kategori and booking.id_booking='$id' ");

while ($row = mysqli_fetch_array($mahasiswa)) {
    $pdf->Cell(40, 8, 'NAMA', 1, 0, 'C');
    $pdf->Cell(40, 8, $row['nama1'], 0, 0, 'C');
    $pdf->Cell(10, 10, '', 0, 1);

    $pdf->Cell(40, 8, 'TANGGAL', 1, 0, 'C');
    $pdf->Cell(40, 8, $row['tanggal'], 0, 0, 'C');

    $pdf->Cell(40, 8, 'KATEGORI', 1, 0, 'C');
    $pdf->Cell(40, 8, $row['nama2'], 0, 0, 'C');
    $pdf->Cell(10, 10, '', 0, 1);

    $pdf->Cell(40, 8, 'JAM MULAI', 1, 0, 'C');
    $pdf->Cell(40, 8, $row['jam_mulai'], 0, 0, 'C');

    $pdf->Cell(40, 8, 'JAM BERAKHIR', 1, 0, 'C');
    $pdf->Cell(40, 8, $row['jam_berakhir'], 0, 0, 'C');
    $pdf->Cell(10, 10, '', 0, 1);

    $pdf->Cell(40, 8, 'PAYMENT', 1, 0, 'C');
    $pdf->Cell(40, 8, $row['nama3'], 0, 0, 'C');

    $pdf->Cell(40, 8, 'HARGA', 1, 0, 'C');
    $pdf->Cell(40, 8, $row['harga'], 0, 1, 'C');
}
$pdf->Cell(10, 20, '', 0, 1);
$pdf->Cell(300, 8, 'TTD', 0, 1, 'C');
$pdf->Cell(10, 10, '', 0, 1);
$pdf->Cell(300, 8, 'DHEPOTO STUDIO', 0, 0, 'C');

$pdf->Cell(50, 10, '', 0, 1);
$pdf->Cell(200, 8, 'Terima kasih atas kunjungan anda', 0, 1, 'C');
$pdf->Output();
