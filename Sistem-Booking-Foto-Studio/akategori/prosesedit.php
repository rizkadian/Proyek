<?php
	include('../koneksi.php');

    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];

        // if (empty($nama) & empty($harga)) {
        //     header("Location: edit.php?error=Isi Data");
        //     exit();
        // } else if(empty($nama)){
        //     header("Location: edit.php?error=Isi Nama Kategori");
        //     exit();
        // } else if(empty($harga)){
        //     header("Location: edit.php?error=Isi Harga Kategori");
        //     exit();
        // } else if(!is_numeric($harga)) {
        //     header("Location: edit.php?error=Harga Harus Angka");
        //     exit();
        // } else if(strlen($nama) >= 50) {
        //     header("Location: edit.php?error=Nama Lebih Dari 50 Karakter");
        //     exit();
        // } else if(strlen($harga) >= 50) {
        //     header("Location: edit.php?error=Harga Lebih Dari 50 Karakter");
        //     exit();
        // } else {
        //     $result = mysqli_query($con, "UPDATE kategori SET nama='$nama', harga='$harga' WHERE id_kategori='$id'");
        //     header("Location: ../admin.php");
        //     exit();
        // }

        $result = mysqli_query($con, "UPDATE kategori SET nama='$nama', harga='$harga' WHERE id_kategori='$id'");
        header("Location: ../admin.php");
        exit();
    }
    
    if (isset($_POST['kembali'])) {
        header("Location: ../admin.php");
    }

?>