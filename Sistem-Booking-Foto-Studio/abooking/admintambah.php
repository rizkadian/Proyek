<?php
// Variable untuk koneksi ke MySQL
$host = "localhost";
$username = "root";
$password = "";
$databasename = "dephoto";

// Syntax untuk koneksi ke MySQL
$con = mysqli_connect($host, $username, $password, $databasename);

// Perkondisian jika gagal konek ke MySQL
if (!$con) {
    echo "Error: ".mysqli_connect_error();
     exit();
}

if (isset($_POST['submit'])) {
    $namapelanggan = $_POST['namapelanggan'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $tanggal = $_POST['tanggal'];
    $kategori = $_POST['kategori'];
    $jadwal = $_POST['jadwal'];
    $payment = $_POST['payment'] or die(mysqli_error($con));

    $result = mysqli_query($con, "INSERT INTO booking SET id_booking='', nama='$namapelanggan', email='$email', telepon='$telepon', tanggal='$tanggal', id_kategori='$kategori', id_jadwal='$jadwal', id_payment='$payment'");
    header("Location: ../admin.php");

}
?>