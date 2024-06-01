<?php  
	include "../koneksi.php";

	session_start();
	if (!isset($_SESSION['username'])) {
		header("Location: ../index.php");
		exit(); 
	}

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $r = mysqli_query($con, "SELECT * FROM konser WHERE id_konser ='$id'");
        $d = mysqli_fetch_array($r);
        $harga = $d['harga'];
        $namaa = $d['nama'];
        $foto = $d['foto'];
        $deskripsi = $d['deskripsi'];
        $waktu = $d['waktu'];
        $lokasi = $d['lokasi'];
    }

    if (isset($_POST['submit'])) {
        $nama = "";
        $email = "";
    
        $err_nama = "";
        $err_email = "";

        $err = false;
        
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $id = $_GET['id'];
    
        if(empty($nama)){
            $err_nama="Isi Nama";
            $err = true;
        } else if(strlen($nama) >= 50) {
            $err_nama="Nama Lebih Dari 50 Karakter";
            $err = true;
        } else if(!preg_match("/[a-zA-Z ]*$/", $nama)) {
            $err_nama="Nama Harus Huruf";
            $err = true;
        } 
        
        if(empty($email)){
            $err_email = "Isi Email";
            $err = true;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err_email = "Email Tidak Sesuai Format";
            $err = true;
        }
        
        if ($err != true) {
            $result = mysqli_query($con, "INSERT INTO tiket SET id_tiket='', nama='$nama', email='$email', id_konser='$id'");
            $berhasil = "Anda Berhasil Membeli Tiket Ini";
        } 
      }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>THE TICKET</title>
    <link rel="stylesheet" href="../css/style4.css" />
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
        <section class="abuabu" id="pricelist">
        <br>
                <p class="ringkasan">
                    Isi Pembelian Tiket
                </p>
        <div class='flex-box'>
            <div class='card'>
            <div class="img" style="background-image: url('../galeri/<?php echo $foto; ?>')"> </div> 
            </div>
            <div class='card'>
			<form action="" method="post">
                <div class="main-user-info">
                  <div class="user-input-box">
				  <label for="">Nama Konser</label>
           		   		<input type="text" name="namaa"  placeholder="Nama Konser" readonly value="<?php echo $namaa; ?>">
           		   </div>
           		</div>
                <div class="main-user-info">
                  <div class="user-input-box">
				  <label for="">Harga</label>
           		   		<input type="text" name="harga"  placeholder="Harga Konser" readonly value="<?php echo $harga; ?>">
           		   </div>
           		</div>
                <div class="main-user-info">
                  <div class="user-input-box">
				  <label for="">Waktu</label>
           		   		<input type="text" name="waktu"  placeholder="Waktu Konser" readonly value="<?php echo $waktu; ?>">
           		   </div>
           		</div>
                   <div class="main-user-info">
                  <div class="user-input-box">
				  <label for="">Lokasi</label>
           		   		<input type="text" name="lokasi"  placeholder="Lokasi Konser" readonly value="<?php echo $lokasi; ?>">
           		   </div>
           		</div>
				<div class="main-user-info">
                  <div class="user-input-box">
				  <label for="">Nama Pembeli</label>
           		   		<input type="text" name="nama"  placeholder="Nama Pembeli">
                        <span class="salahtulis"><?php if (isset($err_nama)) echo $err_nama ?></span>
           		   </div>
           		</div>
           		<div class="main-user-info">
                  <div class="user-input-box">
				  <label for="">Email</label>
           		    	<input type="text" name="email"  placeholder="Email">
                        <span class="salahtulis"><?php if (isset($err_email)) echo $err_email ?></span>
            	   </div>
            	</div>
				<div  class="user-input-box">
                <span class="berhasil"><?php if (isset($berhasil)) echo $berhasil ?></span>
				</div>
				<div class="main-user-info">
                  <div class="user-input-box">
                    <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
            		<input type="submit" class="btn" name="submit" value="BELI" placeholder="BELI">
					</div>
            	</div>
            </form>
            </div>
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
