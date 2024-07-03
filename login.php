<?php
session_start();
require "connect.php";
 ?>

 
<?php
    
    if(isset($_POST["signin"])) {


            $username = $_POST["username"];
            $password = $_POST["password"];

            $result = mysqli_query($koneksi, "SELECT * FROM registrasi WHERE username = '$username'");

            // cek username 
            if(mysqli_num_rows($result) === 1 ) {
  
                // cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){
                // set session
                $_SESSION["login"] = true;

                header("Location: index.php");
                exit;

            }

        }

        $error = true;
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kopas Tamsis</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="./css/style.css"> 
</head>
<body>
    <?php if(isset($error)) : ?>
        <p style="color:red; font-style: italic; text-align: center;">username / password salah</p>
    <?php endif; ?>
      
        
        <!-- Sing in  Form -->
    <div style="margin-top: 105px;">  
        <form action="connect.php" method="post"></form>
        <section class="sign-in">
            <div class="container">
                <div class="signin-content" style="justify-content: center;">
                    <div class="signin-form">
                        <figure><img src="./img/kopas.png" alt="sing up image"></figure>    
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Nama"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Kata Sandi"/>
                            </div>
                            <a href="register.php" class="signup-image-link">Buat Akun</a>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Masuk"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
        </section> 

    <!-- JS -->
    <script src="./jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="./input.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
</body>
</html>