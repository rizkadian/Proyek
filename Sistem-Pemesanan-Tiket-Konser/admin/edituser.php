<?php   
    include_once("../koneksi.php");
    session_start();

	session_start();
	if (!isset($_SESSION['username'])) {
		header("Location: ../index.php");
		exit(); 
	}

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $r = mysqli_query($con, "SELECT * FROM registrasi WHERE id_registrasi ='$id'");
        $d = mysqli_fetch_array($r);
        $nama = $d['nama'];
        $email = $d['email'];
        $username = $d['username'];
        $password = $d['password'];
    }

    if (isset($_POST['tambah'])) {
      $nama = "";
      $email = "";
      $username = "";
      $password = "";
  
      $err_nama = "";
      $err_email = "";
      $err_username = "";
      $err_password = "";

      $err = false;
      
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $id = $_POST['id'];
  
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
      
      if(empty($username)){
          $err_username= "Isi Username";
          $err = true;
      } else if(strlen($username) >= 50) {
        $err_username="Username Lebih Dari 50 Karakter";
        $err = true;
      } else if(strlen($username) < 8) {
          $err_username = "Username Kurang Dari 8 Karakter";
          $err = true;
      } 

      if(empty($password)){
        $err_password= "Isi Password";
        $err = true;
      } else if(strlen($password) >= 50) {
        $err_password="Password Lebih Dari 50 Karakter";
        $err = true;
      } else if(strlen($password) < 8) {
        $err_password = "Password Kurang Dari 8 Karakter";
        $err = true;
      } 
      
      if ($err != true) {
          $result = mysqli_query($con, "UPDATE registrasi SET nama='$nama', email='$email', username='$username', password='$password' WHERE id_registrasi='$id'");
          $berhasil = "Data Berhasil Diedit";
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
    <link rel="stylesheet" href="../css/style6.css" />
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
                    Edit Data User
                </p>
                <div class='card'>
                    <form action="" method="post">
                        <div class="main-user-info">
                        <div class="user-input-box">
                        <label for="">Nama</label>
                                <input type="text" name="nama"  placeholder="Nama Lengkap" value="<?php echo $nama; ?>">
                                <span class="salahtulis"><?php if (isset($err_nama)) echo $err_nama ?></span>
                        </div>
                        </div>
                        <div class="main-user-info">
                        <div class="user-input-box">
                        <label for="">Email</label>
                                <input type="text" name="email"  placeholder="Email" value="<?php echo $email; ?>">
                                <span class="salahtulis"><?php if (isset($err_email)) echo $err_email ?></span>
                        </div>
                        </div>
                        <div class="main-user-info">
                        <div class="user-input-box">
                        <label for="">Username</label>
                                <input type="text" name="username"  placeholder="Username" value="<?php echo $username; ?>">
                                <span class="salahtulis"><?php if (isset($err_username)) echo $err_username ?></span>
                        </div>
                        </div>
                        <div class="main-user-info">
                        <div class="user-input-box">
                        <label for="">Password</label>
                                <input type="password" name="password"  placeholder="Password" value="<?php echo $password; ?>">
                                <span class="salahtulis"><?php if (isset($err_password)) echo $err_password ?></span>
                        </div>
                        </div>
                        <div  class="user-input-box">
                            <span class="berhasil"><?php if (isset($berhasil)) echo $berhasil ?></span>
                        </div>
                        <div class="main-user-info">
                        <div class="user-input-box">
                        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                            <input type="submit" class="btn" name="tambah" value="EDIT">
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
