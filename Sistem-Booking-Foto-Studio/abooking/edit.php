<?php
    include "../koneksi.php";
    $id = $_GET['id'];
    $r = mysqli_query($con, "SELECT * FROM booking WHERE id_booking='$id'");
    $d = mysqli_fetch_array($r);
    $namapelanggan = $d['nama'];
    $email = $d['email'];
    $telepon = $d['telepon'];
    $tanggal = $d['tanggal'];
    $kategori = $d['id_kategori'];
    $jadwal = $d['id_jadwal'];
    $payment = $d['id_payment']; 
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
    <img class="wave" src="../galeri/wave.png">
    <img class="wave" src="../galeri/bg.svg">
	<div class="container">
        <div class="containerr">
              <form action="prosesedit.php" method="post">
              <p class="kk">EDIT BOOKING</p>
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
                      <label for="namapelanggan">Nama *</label>
                      <input type="text" name="namapelanggan" id="namapelanggan" placeholder="Nama Lengkap" value=<?php echo $namapelanggan; ?>>    
                    </div>

                    <div class="user-input-box">
                      <label for="email">Email *</label>
                      <input type="email" name="email" id="email"  value=<?php echo $email; ?> placeholder="Email" />
                    </div>

                    <div class="user-input-box">
                      <label for="telepon">Telepon *</label>
                      <input type="text" name="telepon" id="telepon"  value=<?php echo $telepon; ?> placeholder="Nomor Telepon" />
                    </div>

                    <div class="user-input-box">
                      <label for="kategori">Kategori *</label>
                      <select id="kategori" name="kategori">
                          <option  value=<?php echo $kategori; ?>> </option>
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
                      <label for="tanggal">Tanggal *</label>
                      <input type="date" name="tanggal"  value=<?php echo $tanggal; ?> placeholder="tanggal">
                    </div>

                    <div class="user-input-box">
                      <label for="jadwal">Jadwal *</label>
                      <select id="jadwal" name="jadwal">
                          <option  value=<?php echo $jadwal; ?>> </option>
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
                      <label for="payment">Payment *</label>
                      <select id="payment" name="payment" >
                          <option value=<?php echo $payment; ?>> </option>
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

