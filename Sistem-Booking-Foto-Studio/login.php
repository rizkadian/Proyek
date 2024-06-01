<?php  
    include "koneksi.php";
    $capt = substr(uniqid(), 5);
?>

<!DOCTYPE html>
<html>
<head>
    <title>DEPHOTO</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <img class="wave" src="galeri/wave.png">
    <img class="wave" src="galeri/bg.svg">
    <div class="container">
        <div></div>
        <div class="containerr">
            <form action="alogin/ceklogin.php" method="post">
                <p class="kk">LOGIN</p>
                <div>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="errorr"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                </div>
                <div class="main-user-info">
                    <div class="user-input-box">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Username">
                    </div>
                </div>
                <div class="main-user-info">
                    <div class="user-input-box">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="main-user-info">
                    <div class="user-input-box">
                        <div class="captcha"> <?php echo $capt ?> </div>
                    </div>
                </div>
                <div class="main-user-info">
                    <div class="user-input-box">
                        <label for="confirmcaptcha">Captcha</label>
                        <input type="text" name="confirmcaptcha" placeholder="Captcha" value="">
                        <input type="hidden" class="captcha" name="captcha" value="<?php echo $capt ?>">
                    </div>
                </div>
                <div class="main-user-info">
                    <div class="user-input-box">
                        <input type="submit" class="btn" name="submit" value="Login">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/script1.js"></script>
</body>
</html>
