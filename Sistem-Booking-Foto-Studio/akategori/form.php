<?php  
	// menghubungkan dengan kpassksi
	include "../koneksi.php";
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
              <form action="tambah.php" method="post">
              <p class="kk">TAMBAH KATEGORI</p>
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
                    <input type="text" name="nama" placeholder="Nama Kategori"/>
                  </div>
                  <div class="user-input-box">
                    <label for="">Harga Kategori *</label>
                    <input type="text" name="harga" placeholder="Harga Kategori"/>
                  </div>
                  <div class="form-submit-btn">
                    <input type="submit" class= "btn" name="kembali" value="Kembali">
                  </div>
                  <div class="form-submit-btn">
                    <input type="submit" class= "btn" name="submit" value="Tambah">
                  </div>
                </div>
              </form>
            </div>
        </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>

