<?php
	include('../koneksi.php');

    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $namapelanggan = $_POST['namapelanggan'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];
        $tanggal = $_POST['tanggal'];
        $kategori = $_POST['kategori'];
        $jadwal = $_POST['jadwal'];
        $payment = $_POST['payment'] or die(mysqli_error($con));

        // if(empty($namapelanggan)){
        //     header("Location: edit.php?error= Isi Nama");
        // } else if(strlen($namapelanggan) >= 50) {
        //     header("Location: edit.php?error= Nama Lebih Dari 50 Karakter");
        // } else if(!preg_match("/[a-zA-Z ]*$/", $namapelanggan)) {
        //     header("Location: edit.php?error= Nama Harus Huruf");
        // } else if(empty($email)){
        //     header("Location: edit.php?error= Isi Email");
        // } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     header("Location: edit.php?error= Email Tidak Sesuai Format");
        // } else if(empty($telepon)){
        //     header("Location: edit.php?error= Isi Telepon");
        // } else if(is_numeric($telepon) == false) {
        //     header("Location: edit.php?error= Telepon Harus Angka");
        // } else if(strlen($telepon) <= 10) {
        //     header("Location: edit.php?error= Telepon Kurang Dari 50 Karakter");
        // } else if(empty($tanggal)){
        //     header("Location: edit.php?error= Isi Tangga");
        // } else if(empty($kategori)){
        //     header("Location: edit.php?error= Pilih Kategori");
        // } else if(empty($jadwal)){
        //     header("Location: edit.php?error= Pilih Jadwal");
        // } else if(empty($payment)){
        //     header("Location: edit.php?error= Pilih Payment");
        // } else { 
        //     $result = mysqli_query($con, "UPDATE booking SET nama='$namapelanggan', email='$email', telepon='$telepon', tanggal='$tanggal', id_kategori='$kategori', id_jadwal='$jadwal', id_payment='$payment' WHERE id_booking='$id'");
        //     header("Location: ../admin.php");
        // }

        $result = mysqli_query($con, "UPDATE booking SET nama='$namapelanggan', email='$email', telepon='$telepon', tanggal='$tanggal', id_kategori='$kategori', id_jadwal='$jadwal', id_payment='$payment' WHERE id_booking='$id'");
        header("Location: ../admin.php");
    }
    if (isset($_POST['kembali'])) {
        header("Location: ../admin.php");
    }
?>