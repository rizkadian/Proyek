<?php
	include "koneksi.php";

	session_start();
 
	if (!isset($_SESSION['username'])) {
		header("Location: index.php");
		exit(); // Terminate script execution after the redirect
	}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DEPHOTO STUDIO</title>
    <link rel="stylesheet" href="css/style31.css" />
  </head>
  <body>
    <img class="wave" src="img/wave.png">
    <img class="wave" src="img/bg.svg">
    
    <script src="js/script2.js"></script>
    <nav>
      <div class="layar-dalam">
        <div class="logo">
          <a href=""><img src="galeri/foto1.png"/></a>
        </div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
		  	<li><a href="#booking" class="tomboll">Booking</a></li>
            <li><a href="#kategori" class="tomboll">Kategori</a></li>
            <li><a href="#payment" class="tomboll">Metode Pembayaran</a></li>
            <li><a href="alogin/logout.PHP" class="tombol">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="layar-penuh">
      <main>
        <section id="booking">
          <div class="layar-dalam">
			<br>
            <h3>Booking</h3>
			
				<table class="atas">
					<th><a href="abooking/form.PHP" class="tam">Tambah</a></th>
					<th><a href="abooking/cetak.PHP" class="tam">Cetak</a></th>
					<th></a></th>
					<th>
					<form class="xx" action="admin.php" method="GET" style="text-align: center">
						<input id="namanyay-search-box" name="cari1" type="text" placeholder="Cari Berdasarkan Nama" <?php if(isset($GET['cari1'])){echo $_GET['cari1']; }?>>
						<input id="namanyay-search-btn" value="Go" type="submit" name="go1"/>
					</form>	</th>
				</table>	
			<div class="contable">
				<table class="table1" cellpadding="10" cellspacing="0">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Telepon</th>
						<th>Tanggal</th>
						<th>Kategori</th>
						<th>Jadwal Mulai</th>
						<th>Jadwal Berakhir</th>
						<th>Payment</th>
						<th>Harga</th>
						<th colspan="2" >Aksi</th>
					</tr>
					<?php 
							include "koneksi.php";
							if(isset($_GET['cari1'])){
								$pencarian = $_GET['cari1'];
								$sql1 = "SELECT booking.id_booking, booking.nama as nama1, booking.email, booking.telepon, booking.tanggal, kategori.nama as nama2, kategori.harga, jadwal.jam_mulai, jadwal.jam_berakhir, payment.nama as nama3 FROM booking, jadwal, payment, kategori WHERE booking.id_jadwal = jadwal.id_jadwal and booking.id_payment = payment.id_payment and booking.id_kategori = kategori.id_kategori and booking.nama LIKE '%".$pencarian."%' ";
							}
							else
								$sql1 = "SELECT booking.id_booking, booking.nama as nama1, booking.email, booking.telepon, booking.tanggal, kategori.nama as nama2, kategori.harga, jadwal.jam_mulai, jadwal.jam_berakhir, payment.nama as nama3 FROM booking, jadwal, payment, kategori WHERE booking.id_jadwal = jadwal.id_jadwal and booking.id_payment = payment.id_payment and booking.id_kategori = kategori.id_kategori ";


							$tampil1 = mysqli_query($con, $sql1);	
							if (mysqli_num_rows($tampil1) > 0) : 
            		$no1 = 1;
            		while ($row1 = mysqli_fetch_array($tampil1)) : 
            ?>
					<tr>
						<td><?= $no1++ ?></td>
						<td><?= $row1["nama1"];?></td>
						<td><?= $row1["email"];?></td>
						<td><?= $row1["telepon"];?></td>
						<td><?= $row1["tanggal"];?></td>
						<td><?= $row1["nama2"];?></td>
						<td><?= $row1["jam_mulai"];?></td>
						<td><?= $row1["jam_berakhir"];?></td>
						<td><?= $row1["nama3"];?></td>
						<td><?= $row1["harga"];?></td>
						<td>
							<a class="up" href= "abooking/edit.php?id=<?= $row1["id_booking"];?>">Edit</a>
							<a class="del" href= "abooking/delete.php?id=<?=$row1["id_booking"];?>" onclick="return confirm('Yakin data akan dihapus?');">Hapus</a>
							<a class="print" href= "abooking/struk.php?id=<?= $row1["id_booking"];?>">Cetak</a> 
						</td>
					</tr>
					<?php endwhile; ?>
					<?php else : ?>
						<tr>
							<td colspan="10" align="center">Data tidak ditemukan!</td>
						</tr>
					<?php endif; ?>
				</table>
					</div>
            </div>
          </div>
        </section>

        <section id="kategori">
          <div class="layar-dalam">
            <h3>Kategori</h3>
			<table class="atas">
					<th><a href="akategori/form.PHP" class="tam">Tambah</a></th>
					<th><a href="akategori/cetak.PHP" class="tam">Cetak</a></th>
					<th></a></th>
					<th>
					<form class="xx" action="admin.php" method="GET">
						<input id="namanyay-search-box" name="cari2" type="text" placeholder="Cari Berdasarkan Nama" <?php if(isset($GET['cari2'])){echo $_GET['cari2']; }?>>
						<input id="namanyay-search-btn" value="Go" type="submit" name="go3"/>
					</form>	</th>
				</table>	
				<div class="contable">
				<table class="table1"  cellpadding="5" cellspacing="0">
					<tr>
						<th class="c1" >No</th>
						<th class="c2" >Nama</th>
						<th >Harga</th>
						<th colspan="2" >Aksi</th>
					</tr>
					<?php 
						include "koneksi.php";
						if(isset($_GET['cari2'])){
							$pencarian2 = $_GET['cari2'];
							$sql2 = "SELECT * FROM kategori WHERE kategori.nama LIKE '%".$pencarian2."%' ";
						}
						else
							$sql2 = "SELECT * FROM kategori";
						
						$tampil2 = mysqli_query($con, $sql2);
						if (mysqli_num_rows($tampil2) > 0) :
            $no2 = 1;
           	while ($row2 = mysqli_fetch_array($tampil2)) : 
           ?>
					<tr>
						<td><?= $no2++ ?></td>
						<td><?= $row2["nama"];?></td>
						<td><?= $row2["harga"];?></td>
						<td>
							<a class="up" href= "akategori/edit.php?id=<?= $row2["id_kategori"];?>">Edit</a> | 
							<a class="del" href= "akategori/delete.php?id=<?=$row2["id_kategori"];?>" onclick="return confirm('Yakin data akan dihapus?');">Hapus</a>
						</td>
					</tr>
					<?php endwhile; ?>
					<?php else : ?>
						<tr>
							<td colspan="5" align="center">Data tidak ditemukan!</td>
						</tr>
					<?php endif; ?>
				</table>
					</div>
          </div>
        </section>

        <section id="payment">
          <div class="layar-dalam">
            <h3>Metode Pembayaran</h3>
				<table class="atas">
					<th><a href="apayment/form.PHP" class="tam">Tambah</a></th>
					<th><a href="apayment/cetak.PHP" class="tam">Cetak</a></th>
					<th></a></th>
					<th>
					<form class="xx" action="admin.php" method="GET">
						<input id="namanyay-search-box" name="cari3" type="text" placeholder="Cari Berdasarkan Nama" <?php if(isset($GET['cari3'])){echo $_GET['cari3']; }?>>
						<input id="namanyay-search-btn" value="Go" type="submit" name="go3"/>
					</form>	</th>
				</table>	
				<div class="contable">
				<table class="table1"  cellpadding="4" cellspacing="0">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th colspan="2" >Aksi</th>
					</tr>

					<?php 
						include "koneksi.php";
						if(isset($_GET['cari3'])){
							$pencarian3 = $_GET['cari3'];
							$sql3 = "SELECT * FROM payment WHERE payment.nama LIKE '%".$pencarian3."%' ";
						}
						else	
							$sql3 = "SELECT * FROM payment";


						$tampil3 = mysqli_query($con, $sql3);
						if (mysqli_num_rows($tampil3) > 0) :
            $no3 = 1;
           	while ($row3 = mysqli_fetch_array($tampil3)) : 
           ?>
					<tr>
						<td><?= $no3++ ?></td>
						<td><?= $row3["nama"];?></td>
						<td>
							<a class="up" href= "apayment/edit.php?id=<?php echo $row3['id_payment']; ?>">Edit</a> | 
							<a class="del" href= "apayment/delete.php?id=<?php echo $row3['id_payment']; ?>" onclick="return confirm('Yakin data akan dihapus?');">Hapus</a>
						</td>
					</tr>
					<?php endwhile; ?>
					<?php else : ?>
						<tr>
							<td colspan="4" align="center">Data tidak ditemukan!</td>
						</tr>
					<?php endif; ?>
				</table><br>
				<div>
          </div>
        </section>
      </main>

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
          <div class="copyright">&copy; DEPHOTO STUDIO</div>
        </div>
      </footer>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="js/script3.js"></script>
  </body>
</html>
