<?php
    include_once("../koneksi.php");

    session_start();
	if (!isset($_SESSION['username'])) {
		header("Location: ../index.php");
		exit(); 
	}

    $id = $_GET['id'];
    $result = mysqli_query($con, "DELETE FROM registrasi WHERE id_registrasi='$id'");

    header("Location: user.php");
?>