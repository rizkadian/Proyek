<?php  
	include "../koneksi.php";

	session_start();
	if (!isset($_SESSION['username'])) {
		header("Location: ../index.php");
		exit(); 
	}

    $sql = "SELECT konser.harga, konser.nama as nama1, konser.foto, konser.deskripsi, konser.waktu, konser.lokasi, tiket.nama as nama2, tiket.id_tiket, tiket.email FROM konser, tiket WHERE tiket.id_konser = konser.id_konser";
	$tampil = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>THE TICKET</title>
    <link rel="stylesheet" href="../css/style5.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
  </head>
  <body>
    <script src="../js/script.js"></script>
    <nav>
        <div class="logo">THE TICKET</div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
            <li><a href="../utama.php" class="tomboll">Home</a></li>
            <li><a href="tampil.php" class="tomboll">Tiket Saya</a></li>
            <li><a href="../daftar/logout.php" class="tombol">KELUAR</a></li>
          </ul>
        </div>
    </nav>

    <div class="layar-penuh">
      <main>
        <section class="abuabu" id="pricelist"><br><br>
        <?php if (mysqli_num_rows($tampil) > 0) : ?>
                <br><p class="ringkasan">
                    Tiket yang Anda Pesan
                </p>
            <?php endif; ?>
            <div class='flex-box'>

                <?php if (mysqli_num_rows($tampil) > 0) : ?>
            	<?php while ($row = mysqli_fetch_array($tampil)) : ?>
                <div class='card'>
                <div class="img" style="background-image: url('../galeri/<?= $row["foto"];?>')"> </div> 
                    <p class='harga'><?= $row["nama1"];?></p>
                    <p class="deskripsi">Waktu Konser : <?= $row["waktu"];?></p>
                    <p class="deskripsi">Harga Konser : <?= $row["harga"];?></p>
                    <p class='deskripsi'>Nama Pembeli : <?= $row["nama2"];?></p>
                    <p class="deskripsi">Email Pembeli : <?= $row["email"];?></p>
                    <p class="bayar">Total Pembayaran : <?= $row["harga"];?></p>
                    
                    <a class="a" href= "edit.php?id=<?= $row["id_tiket"];?>">EDIT</a> 
                    <a class="c" href= "hapus.php?id=<?= $row["id_tiket"];?>" onclick="return confirm('Yakin tiket akan dihapus?');">BATAL PESANAN</a> 
                    <a class="b" href= "cetak.php?id=<?= $row["id_tiket"];?>">CETAK</a> 
                </div>

                <?php endwhile; ?>
				<?php else : ?>
					<p class="ringkasan">
                        Ayo Pesan Tiketmu Sekarang
                        <br><br><br><br><br><br></p>
				<?php endif; ?>
            </div>
        </section>

      <footer id="contact">
        <div class="layar-dalam">
          <div>
            <h5>Info</h5>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam,
            sunt?
          </div>
          <div>
            <h5>Contact</h5>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam,
            sunt?
          </div>
          <div>
            <h5>Help</h5>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam,
            sunt?
          </div>
          <div>
            <h5>Sitemap</h5>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam,
            sunt?
          </div>
        </div>
        <div class="layar-dalam">
          <div class="copyright">&copy; THE TICKET</div>
        </div>
      </footer>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="../javascript/script.js"></script>
  </body>
</html>
