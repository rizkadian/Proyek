<?php
    include "../koneksi.php";
    $id = $_GET['id'];
    $r = mysqli_query($con, "SELECT * FROM kategori WHERE id_kategori='$id'");
    $d = mysqli_fetch_array($r);
    $nama = $d['nama'];
    $harga = $d['harga'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>DEPHOTO</title>
	<link rel="stylesheet" type="text/css" href="../css/style4.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <img class="wave" src="../galeri/wave.png">
    <img class="wave" src="../galeri/bg.svg">
	<div class="container">
        <div class="containerr">
              <form action="prosesedit.php" method="post">
              <p class="kk">EDIT KATEGORI</p>
                <div>
                  <?php if (isset($_GET['error'])) { ?>
                    <p class="errorr"><?php echo $_GET['error']; ?></p>
                  <?php } ?>
                            <?php if (isset($_GET['berhasil'])) { ?>
                    <p class="berhasill"><?php echo $_GET['berhasil']; ?></p>
                  <?php } ?>
				        </div>
                <div class="main-user-info">
                  <div class="user-input-box">
                    <label for="">Nama Kategori *</label>
                    <input type="text" name="nama" placeholder="Nama Kategori" value=<?php echo $nama; ?>>
                  </div>
                  <div class="user-input-box">
                    <label for="">Harga Kategori *</label>
                    <input type="text" name="harga" placeholder="Harga Kategori" value=<?php echo $harga; ?>>
                  </div>
                  <div class="form-submit-btn">
                    <input type="submit" class= "btn" name="kembali" value="Kembali">
                  </div>
                  <div class="form-submit-btn">
                  <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                    <input type="submit" class= "btn" name="edit" value="Edit">
                  </div>
                </div>
              </form>
            </div>
        </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>

