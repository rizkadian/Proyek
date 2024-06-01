<?php
	include('../koneksi.php');

    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];

        // if(empty($nama)){
        //     header("Location: edit.php?error=Isi Nama Payment");
        //     exit();
        // } else if(strlen($nama) >= 50) {
        //     header("Location: edit.php?error=Nama Lebih Dari 50 Karakter");
        //     exit();
        // } else {
        //     $result = mysqli_query($con, "UPDATE payment SET nama='$nama' WHERE id_payment='$id'");
        //     header("Location: ../admin.php");
        //     exit();
        // }

        $result = mysqli_query($con, "UPDATE payment SET nama='$nama' WHERE id_payment='$id'");
        header("Location: ../admin.php");
        exit();
    }
    
    if (isset($_POST['kembali'])) {
        header("Location: ../admin.php");
    }

?>