<?php
// Variable untuk koneksi ke MySQL
$host = "localhost";
$username = "root";
$password = "";
$databasename = "dephoto";

// Syntax untuk koneksi ke MySQL
$con = mysqli_connect($host, $username, $password, $databasename);

// Perkondisian jika gagal konek ke MySQL
if (!$con) {
    echo "Error: ".mysqli_connect_error();
     exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>DEPHOTO</title>
	<link rel="stylesheet" type="text/css" href="../css/style6.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <script src="../js/script2.js"></script>
    <img class="wave" src="../galeri/wave.png">
    <img class="wave" src="../galeri/bg.svg">
	<div class="container">
        <div class="containerr">
            <form action="admintambah.php" method="POST">
               <p class="kk">TAMBAH BOOKING</p>
              <div class="main-user-info">
                <div class="user-input-box">
                  <label for="namapelanggan">Nama</label>
                  <input type="text" name="namapelanggan" id="namapelanggan" placeholder="Nama Lengkap" oninput="validasiNama(this)" required />
                </div>

                <div class="user-input-box">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" placeholder="Email" oninput="validasiEmail(this)" required />
                </div>

                <div class="user-input-box">
                  <label for="telepon">Telepon</label>
                  <input type="text" name="telepon" id="telepon" placeholder="Nomor Telepon" oninput="validasiNomorTelepon(this)" required />
                </div>
                <div class="user-input-box">
                  <label for="kategori">Kategori</label>
                  <select id="kategori" name="kategori" required oninput="validateKategori()">
                      <option disabled selected value="">Pilih Kategori</option>
                      <?php 
                        $a = "SELECT * FROM kategori";
                        $r = mysqli_query($con, $a);
                        while ($aa = mysqli_fetch_assoc($r)) {
                          echo "<option value='" . $aa['id_kategori'] . "'>" . $aa['nama'] . "</option>";
                        }
                      ?>
                  </select>
                </div>
                <div class="user-input-box">
                  <label for="tanggal">Tanggal</label>
                  <input class="ddate"type="date" name="tanggal" placeholder="tanggal" required>
                </div>

                <div class="user-input-box">
                  <label for="jadwal">Jadwal</label>
                  <select id="jadwal" name="jadwal" required oninput="validateJadwal()">
                      <option disabled selected value="">Pilih Jadwal</option>
                      <?php 
                        $a = "SELECT * FROM jadwal";
                        $r = mysqli_query($con, $a);
                        while ($aa = mysqli_fetch_assoc($r)) {
                          echo "<option value='" . $aa['id_jadwal'] . "'>" . $aa['jam_mulai'] . " - " . $aa['jam_berakhir'] . "</option>";
                        }
                      ?>
                  </select>
                </div>
                <div class="user-input-box">
                  <label for="payment">Payment</label>
                  <select id="payment" name="payment" required oninput="validatePayment()">
                      <option disabled selected value="">Pilih Payment</option>
                      <?php 
                        $a = "SELECT * FROM payment";
                        $r = mysqli_query($con, $a);
                        while ($aa = mysqli_fetch_assoc($r)) {
                          echo "<option value='" . $aa['id_payment'] . "'>" . $aa['nama'] . "</option>";
                        }
                      ?>
                  </select>
                    </div>

                    <div class="user-input-box"> </div>
                    <div class="form-submit-btn">
                      <input type="reset" class= "btn" name="kembali" value="Kembali">
                    </div>
                    <div class="form-submit-btn">
                      <input type="submit" class= "btn" id="submit" name="submit" value="Tambah">
                    </div>
                </div>
              </form>
            </div>
        </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>

