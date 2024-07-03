<?php
include 'connect.php';

if (isset($_POST["signup"])){
    if(registrasi($_POST) > 0 ){

        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "INSERT INTO registrasi
                    VALUES 
                    ('', '$email', '$username', '$password')
                    ";

        echo "<script>
                alert('User baru berhasil ditambahkan!');
            </script>";
    }else{
        echo mysqli_error($koneksi);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
</head>
    <body>
        <div style="margin-top: 50px;">
            <!-- Sign up form -->
            <section>
                <div class="container">
                    <div class="signup-content" style="justify-content: center;">
                        <div class="signup-form">
                        <figure><img src="./img/kopas.png" alt="sing up image"></figure>
                            <h2 class="form-title"></h2>
                            <form method="POST" class="register-form" id="register-form">
                                <div class="form-group">
                                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="username" id="username" placeholder="Nama"/>
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                                    <input type="email" name="email" id="email" placeholder="Email"/>
                                </div>
                                <div class="form-group">
                                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password" id="password" placeholder="Kata Sandi"/>
                                </div>
                                <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password2" id="password2" placeholder="Ulang Kata Sandi"/>
                            </div>
                            <a href="login.php" class="signup-image-link">Saya Sudah Daftar</a>
                                <div class="form-group form-button">
                                    <input type="submit" name="signup" id="signup" class="form-submit" value="Daftar"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
            </section>
        </div>
    </body>
</html>
