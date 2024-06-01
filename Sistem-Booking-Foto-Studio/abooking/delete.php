<?php
    include_once("../koneksi.php");

    $id = $_GET['id'];
    $result = mysqli_query($con, "DELETE FROM booking WHERE id_booking='$id'");

    header("Location: ../admin.php");
?>