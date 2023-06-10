<?php
    include "crud/koneksi.php";

    $sql=$koneksi->query("SELECT * FROM tb_artikel where id_artikel=$_GET[id]");
    $baris=mysqli_fetch_array($sql);
?>


<?php
    include ("crud/koneksi.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
    <!-- javascript -->
    <script src="js/script.js"></script>

    <!-- Header -->
    <header>
        <div class="logo">
            <a href="">BarzTic</a>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#article">Article</a></li>
                <li><a href="">Gallery</a></li>
            </ul>
        </nav>
    </header>

    <!-- <div id="home">

        <div class="slide">
            <h1 class="slide-text">Selamat Datang di Website Artikel <br> Barztic</h1>
            <img src="assets/slide1.jpg" alt="" class="img-slides">
        </div>

    </div> -->
    <!-- Akhir Header -->

    <!-- Content -->

    <div class="content-artikel">
        <h2 class="judul-artikel"><?= $baris ['judul_artikel'];?></h2> <br>
        <p><?= $baris ['isi_artikel'];?></p>
    </div>

    <!-- Akhir Content -->

    <!-- FOOTER -->

    <footer>
        
    </footer>
</body>
</html>