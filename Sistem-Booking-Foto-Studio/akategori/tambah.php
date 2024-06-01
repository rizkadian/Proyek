<?php
    // Memanggil file koneksi.php
    include "../koneksi.php";

    // Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
    if (isset($_POST['submit'])) {

        // Variable untuk menampung data $_POST yang dikirimkan melalui form.
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];

        if (empty($nama) & empty($harga)) {
            header("Location: form.php?error=Isi Data");
            exit();
        } else if(empty($nama)){
            header("Location: form.php?error=Isi Nama Kategori");
            exit();
        } else if(empty($harga)){
            header("Location: form.php?error=Isi Harga Kategori");
            exit();
        } else if(!is_numeric($harga)) {
            header("Location: form.php?error=Harga Harus Angka");
            exit();
        } else if(strlen($nama) >= 50) {
            header("Location: form.php?error=Nama Lebih Dari 50 Karakter");
            exit();
        } else if(strlen($harga) >= 20) {
            header("Location: form.php?error=Harga Lebih Dari 20 Karakter");
            exit();
        } else {
            $result = mysqli_query($con, "INSERT INTO kategori VALUES('','$nama', '$harga')");
            header("Location: form.php?berhasil=Data Berhasil Disimpan");
            exit();
        }
    }
    if (isset($_POST['kembali'])) {
        header("Location: ../admin.php");
    }
?>