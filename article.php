<?php
    include "crud/koneksi.php";

    $id = $_GET['id'];
    $sql = mysqli_query($koneksi, "SELECT * FROM tb_artikel where id_artikel = $id");
    $baris=mysqli_fetch_array($sql);
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
    <!-- <script src="js/script.js"></script> -->

    <!-- Header -->
    <header>
        <div class="logo">
            <a href="index.php">BarzTic</a>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about">About</a></li>
                <li><a href="#article">Article</a></li>
                <li><a href="">Gallery</a></li>
            </ul>
        </nav>
    </header>

    <!-- Akhir Header -->

    <!-- Content -->

    <article class="content-artikel">
        <img src="assets/<?= $baris['gambar_artikel']; ?>">
        <h2 class="judul-artikel"><?= $baris ['judul_artikel'];?></h2> <br>
        <div class="isi-artikel">
            <p><?= $baris ['isi_artikel'];?></p><br>
        </div>
    </article>

    <!-- Akhir Content -->

    <!-- FOOTER -->

    <footer>
        
    </footer>
</body>
</html>