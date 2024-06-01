<?php   
    include_once("../koneksi.php");

    session_start();
	if (!isset($_SESSION['username'])) {
		header("Location: ../index.php");
		exit(); 
	}

    $sql = "SELECT * FROM konser";
	$tampil = mysqli_query($con, $sql);

    if (isset($_POST['tambah'])) {
      $nama = "";
      $harga = "";
      $deskripsi = "";
      $lokasi = "";
      $waktu = "";
      $foto = "";
  
      $err_nama = "";
      $err_harga = "";
      $err_deskripsi = "";
      $err_lokasi = "";
      $err_waktu = "";
      $err_foto = "";

      $err = false;
      
      $nama = $_POST['nama'];
      $harga = $_POST['harga'];
      $deskripsi = $_POST['deskripsi'];
      $lokasi = $_POST['lokasi'];
      $waktu = $_POST['waktu'];
      $foto = $_POST['foto'];

      $foto1 = $_FILES['foto']['name'];
      $tmp_name = $_FILES['foto']['tmp_name'];

      move_uploaded_file($tmp_name, "../galeri/".$foto1);
  
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
      
      if(empty($harga)){
          $err_harga = "Isi Harga";
          $err = true;
      } else if (!preg_match("/[0-9 ]*$/", $harga)) {
          $err_harga = "Harga Harus Angka";
          $err = true;
      }
      
      if(empty($deskripsi)){
          $err_deskripsi= "Isi Deskripsi";
          $err = true;
      }  

      if(empty($lokasi)){
        $err_lokasi= "Isi Lokasi";
        $err = true;
      } 

      if(empty($waktu)){
        $err_waktu = "Isi Waktu";
        $err = true;
      } 

      if(empty($foto)){
        $err_foto= "Isi Foto";
        $err = true;
      } 
      
      if ($err != true) {
          $result = mysqli_query($con, "INSERT INTO konser SET id_konser='', nama='$nama', harga='$harga', deskripsi='$deskripsi', lokasi='$lokasi', waktu='$waktu', foto='$foto'");
          $berhasil = "Data Berhasil Ditambahkan";
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
    <link rel="stylesheet" href="../css/style7.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
  </head>
  <body>
    <nav>
        <div class="logo">THE TICKET</div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
          <li><a href="tiket.php" class="tomboll">Data Tiket</a></li>
            <!-- <li><a href="konser.php" class="tomboll">Data Konser</a></li> -->
            <li><a href="user.php" class="tomboll">Data User</a></li>
            <li><a href="admin.php" class="tomboll">Data Admin</a></li>
            <li><a href="../daftar/logout.PHP" class="tombol">KELUAR</a></li>
          </ul>
        </div>
    </nav>

    <div class="layar-penuh">
      <main>
        <section class="abuabu" id="pricelist">
         <br>
                <p class="ringkasan">
                    Data Konser
                </p>
                <div class='card'>
                <a class="up" href= "cetakkonser.php">Cetak Data Konser</a>    
                <form id="searchthis" action="carikonser.php" style="display:inline;" method="GET">
                    <input id="namanyay-search-box" name="carinama" type="text" placeholder="Cari Berdasarkan Nama"/>
                    <input id="namanyay-search-btn" name="cari" value="Cari" type="submit"/>
                </form>
                </div>
                <div class='card'>
                <div class="flow">
                    <table class="table1" cellpadding="10" cellspacing="0">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Lokasi</th>
                            <th>Waktu</th>
                            <th>Foto</th>
                            <th colspan="2" >Aksi</th>
                        </tr>
                        <?php if (mysqli_num_rows($tampil) > 0) : ?>
                        <?php $no1 = 1; ?>
                        <?php while ($row1 = mysqli_fetch_array($tampil)) : ?>
                        <tr>
                            <td><?= $no1++ ?></td>
                            <td><?= $row1["nama"];?></td>
                            <td><?= $row1["harga"];?></td>
                            <td><?= $row1["deskripsi"];?></td>
                            <td><?= $row1["lokasi"];?></td>
                            <td><?= $row1["waktu"];?></td>
                            <td><img class='img' style="background-image: url('../galeri/<?= $row["foto"];?>')"></img></td>
                            <td>
                                <a class="up" href= "editkonser.php?id=<?= $row1["id_konser"];?>">Edit</a> | 
                                <a class="del" href= "deletekonser.php?id=<?=$row1["id_konser"];?>" onclick="return confirm('Yakin data akan dihapus?');">Hapus</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="9" align="center">Data tidak ada!</td>
                            </tr>
                        <?php endif; ?>
                    </table>
				</div>
                </div>    
                <p class="ringkasan">
                    Tambah Data Konser
                </p>
                <div class='card'>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="main-user-info">
                        <div class="user-input-box">
                        <label for="">Nama</label>
                                <input type="text" name="nama"  placeholder="Nama Konser">
                                <span class="salahtulis"><?php if (isset($err_nama)) echo $err_nama ?></span>
                        </div>
                        </div>
                        <div class="main-user-info">
                        <div class="user-input-box">
                        <label for="">Harga</label>
                                <input type="text" name="harga"  placeholder="Harga">
                                <span class="salahtulis"><?php if (isset($err_harga)) echo $err_harga ?></span>
                        </div>
                        </div>
                        <div class="main-user-info">
                        <div class="user-input-box">
                        <label for="">Deskripsi</label>
                                <input type="text" name="deskripsi"  placeholder="Deskripsi">
                                <span class="salahtulis"><?php if (isset($err_deskripsi)) echo $err_deskripsi ?></span>
                        </div>
                        </div>
                        <div class="main-user-info">
                        <div class="user-input-box">
                        <label for="">Lokasi</label>
                                <input type="text" name="lokasi"  placeholder="Lokasi">
                                <span class="salahtulis"><?php if (isset($err_lokasi)) echo $err_lokasi ?></span>
                        </div>
                        </div>
                        <div class="main-user-info">
                        <div class="user-input-box">
                        <label for="">Waktu</label>
                                <input type="date" name="waktu"  placeholder="Waktu">
                                <span class="salahtulis"><?php if (isset($err_waktu)) echo $err_waktu ?></span>
                        </div>
                        </div>
                        <div class="main-user-info">
                        <div class="user-input-box">
                        <label for="">Foto</label>
                                <input type="file" name="foto"  placeholder="Foto">
                                <span class="salahtulis"><?php if (isset($err_foto)) echo $err_foto ?></span>
                        </div>
                        </div>
                        <div  class="user-input-box">
                            <span class="berhasil"><?php if (isset($berhasil)) echo $berhasil ?></span>
                        </div>
                        <div class="main-user-info">
                        <div class="user-input-box">
                            <input type="submit" class="btn" name="tambah" value="TAMBAH">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <footer id="contact">
            <div class="layar-dalam">
                <div class="copyright">&copy; THE TICKET</div>
            </div>
        </footer>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"></script>
    <script src="javascript/script.js"></script>

  </body>
</html>
