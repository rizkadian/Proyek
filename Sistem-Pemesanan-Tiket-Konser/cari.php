<?php  
	include "koneksi.php";

	session_start();
	if (!isset($_SESSION['username'])) {
		header("Location: index.php");
		exit(); 
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>THE TICKET</title>
    <link rel="stylesheet" href="css/style3.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
  </head>
  <body>
    <script src="js/script2.js"></script>
    <nav>
        <div class="logo">THE TICKET</div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
            <li><a href="utama.php" class="tomboll">Home</a></li>
            <li><a href="tiket/tampil.php" class="tomboll">Tiket Saya</a></li>
            <li><a href="daftar/logout.php" class="tombol">KELUAR</a></li>
          </ul>
        </div>
    </nav>

    <div class="layar-penuh">
      <main>
        <section class="abuabu" id="pricelist">
            <br>

            <form id="searchthis" action="" style="display:inline;" method="get">
                <input id="namanyay-search-box" name="carinama" type="text" placeholder="Cari Berdasarkan Nama" />
                <input id="namanyay-search-btn" name="cari" value="Cari" type="submit"/>
            </form> <br><br>

            <?php if (isset($_GET['cari'])) : ?>

            <?php
                $cari = $_GET['cari'];
                $carinama = $_GET['carinama'];
                $result = mysqli_query($con, "SELECT * FROM konser WHERE nama like '%$carinama%'");
            ?>

                <?php if (mysqli_num_rows($result) > 0) : ?>
                    <p class="ringkasan">
                        Tiket yang tersedia di Website The Ticket
                    </p>
                <?php endif; ?>
                <div class='flex-box'>

                    <?php if (mysqli_num_rows($result) > 0) : ?>
                    <?php while ($row = mysqli_fetch_array($result)) : ?>

                    <div class='card'>
                        <div class='img' style="background-image: url('galeri/<?= $row["foto"];?>')"></div>
                        <p class='judul'><?= $row["nama"];?></p>
                        <p class="waktu"><?= $row["waktu"];?></p>
                        <p class="deskripsi"><?= $row["deskripsi"];?></p>
                        <p class="harga"><?= $row["harga"];?></p>
                        <a class="a" href= "tiket/form.php?id=<?= $row["id_konser"];?>">Beli Tiket</a> 
                    </div>

                    <?php endwhile; ?>
                    <?php else : ?>
                        <p class="ringkasan">
                            Tidak Ada Tiket Yang Tersedia
                        </p><br><br><br><br><br><br><br><br><br>
                    <?php endif; ?>

            <?php else : ?>
				<p class="ringkasan">
                    Tidak Ada Tiket Yang Tersedia
                </p><br><br><br><br><br><br><br><br><br>
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
    <script src="javascript/script.js"></script>
  </body>
</html>
