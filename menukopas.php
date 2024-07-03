<?php
include "session.php";
include "connect.php";

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/one-page-checkout.css">
    <link rel="stylesheet" href=./css/kopas.css>
    <title>Document</title>
</head>
<body class="backgroundmenu">
    <div class="kotak"><a href="tampilan awal.html"><i class="fa fa-long-arrow-left" style="font-size:36px;color: black;"></i></a></div>
    <p align="center">Halo selamat datang <b><?php echo $_SESSION['username']; ?></b>, Silahkan order!</p>
    <ul class="makmin">
        <li><font size="5">Makanan &ensp;<a href="makanan.php"><i class="fa fa-long-arrow-right" style="font-size:36px;color: black;"></i></a></font></li>
        <li class="aw"><font size="5">Minuman &ensp;<a href="minuman.html"><i class="fa fa-long-arrow-right" style="font-size:36px;color: black;"></i></a></font></li>
    </ul>
</body>
</html> 



<p align="center"><a href="logout.php"><b>Logout</b></p>