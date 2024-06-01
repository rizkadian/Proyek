<?php
    include_once("../koneksi.php");

    $id = $_GET['id'];
    $result = mysqli_query($con, "DELETE FROM kategori WHERE id_kategori='$id'");

    header("Location: ../admin.php");
?>