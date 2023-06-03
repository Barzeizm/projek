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
                <li><a href="#home">Home</a></li>
                <li><a href="#article">Article</a></li>
                <li><a href="">Gallery</a></li>
            </ul>
        </nav>
    </header>
    <!-- Akhir Header -->

    <!-- Content -->

    <div id="home">

        <div class="slide">
            <h1 class="slide-text">Selamat Datang di Website Artikel <br> Barztic</h1>
            <img src="assets/slide1.jpg" alt="" class="img-slides">
        </div>

    </div>

    <?php
        $sql = "SELECT * FROM tb_artikel";
        $hasil = mysqli_query($koneksi, $sql);

        $artikel = mysqli_num_rows($hasil);
        if($artikel > 0){
            while($row = mysqli_fetch_assoc($hasil)){
    ?>
    <div id="article" class="card-content">
        <ul class="cards">
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="assets/124.jpg"></div>
                    <div class="card_content">
                        <h2 class="card_title"><?= $row["judul_artikel"]; ?></h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <a href="" class="card-btn">
                            <input type="button" value="Baca">
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <?php
            }
        }
    ?>

    <!-- Akhir Content -->
</body>
</html>