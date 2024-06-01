<?php  
	include "koneksi.php";

	$capt = substr(uniqid(), 5);
?>

<!DOCTYPE html>
<html>
<head>
	<title>THE TICKET</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
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
			<form action="admin/ceklogin.php" method="post">
				<div class="main-user-info">
                  <div class="user-input-box">
				  <label for="">Username</label>
           		   		<input type="text" name="username"  placeholder="Username">
           		   </div>
           		</div>
           		<div class="main-user-info">
                  <div class="user-input-box">
				  <label for="">Password</label>
           		    	<input type="password" name="password"  placeholder="Password">
            	   </div>
            	</div>
				<div class="main-user-info">
                  <div class="user-input-box">
					<div class="captcha"> <?php echo $capt ?> </div>
            	  </div>
            	</div>
				<div class="main-user-info">
                  <div class="user-input-box">
				  <label for="">Captcha</label>
      					<input type="text" name="confirmcaptcha" placeholder="Captcha" value="">
						<input type="hidden" class="captcha" name="captcha" value="<?php echo $capt ?>">
            	   </div>
            	</div>
				<div  class="user-input-box">
					<?php if (isset($_GET['error'])) { ?>
						<p class="errorr"><?php echo $_GET['error']; ?></p>
					<?php } ?>
				</div>
				<div class="main-user-info">
                  <div class="user-input-box">
            		<input type="submit" class="btn" name="submit" value="MASUK SEBAGAI ADMIN" placeholder="Nama">
					</div>
            	</div>
            </form>
        </div>
    </div>
    <script src="javascript/script.js"></script>
</body>
</html>

