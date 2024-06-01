<?php
    include_once("../koneksi.php");

    $id = $_GET['id'];
    $result = mysqli_query($con, "DELETE FROM payment WHERE id_payment='$id'");

    header("Location: ../admin.php");
?>