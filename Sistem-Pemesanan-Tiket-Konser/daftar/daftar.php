<?php  
	    include_once("../koneksi.php");

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
              $result = mysqli_query($con, "INSERT INTO registrasi SET id_registrasi='', nama='$nama', email='$email', username='$username', password='$password'");
              $berhasil = "Akun Anda Berhasil Didaftarkan";
          } 
        }
?>

<!DOCTYPE html>
<html>
<head>
	<title>THE TICKET</title>
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <header>
		<div class="logo">THE TICKET</div>
	</header>
	<div class="container">
		<div class="containerr">
			<form action="" method="post">
				<div class="main-user-info">
          <div class="user-input-box">
				  <label for="">nama</label>
           		   		<input type="text" name="nama"  placeholder="Nama Lengkap">
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
                <div class="main-user-info">
                  <div class="user-input-box">
				  <label for="">Username</label>
           		    	<input type="text" name="username"  placeholder="Username">
                        <span class="salahtulis"><?php if (isset($err_username)) echo $err_username ?></span>
            	   </div>
            	</div>
                <div class="main-user-info">
                  <div class="user-input-box">
				  <label for="">Password</label>
           		    	<input type="password" name="password"  placeholder="Password">
                        <span class="salahtulis"><?php if (isset($err_password)) echo $err_password ?></span>
            	   </div>
            	</div>
				<div  class="user-input-box">
                    <span class="berhasil"><?php if (isset($berhasil)) echo $berhasil ?></span>
				</div>
				<div class="main-user-info">
                  <div class="user-input-box">
            		<input type="submit" class="btn" name="tambah" value="DAFTAR">
					</div>
            	</div>
                <p class="daftar"> Sudah memiliki akun? <a href="../index.php" class="daftarhref">Masuk Sekarang</a> </p>
            </form>
        </div>
    </div>
    <script src="javascript/script.js"></script>
</body>
</html>

