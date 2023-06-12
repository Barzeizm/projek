<?php
    include ("crud/koneksi.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <title>Document</title>
</head>
<body>
    <!-- javascript -->
    <!-- <script src="js/script.js"></script> -->

    <!-- Header -->
    <header>
        <div class="logo">
            <a href="">BarzTic</a>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#article">Article</a></li>
                <li><a href="">Gallery</a></li>
            </ul>
        </nav>
    </header>
    <!-- Akhir Header -->

    <!-- Content -->

    <main class="home">
        <div id="home" class="slide">
            <img src="assets/slide1.jpg" alt="">
            <h1 class="slide-text">Selamat Datang di Website Artikel <br> Barztic</h1>
        </div>
        <div id="about" class="about">       
            <div class="text-about">
                <h2>About</h2>
                <p>
Graffiti adalah bentuk seni jalanan yang melibatkan penggambaran atau penulisan di dinding, permukaan publik, atau ruang umum lainnya. Biasanya, graffiti dilakukan dengan menggunakan cat semprot atau alat tulis lainnya. Graffiti sering kali memiliki karakteristik yang kreatif, beragam, dan ekspresif. Ini bisa berupa gambar, tulisan, atau kombinasi keduanya. Graffiti dapat menjadi sarana bagi seniman untuk menyampaikan pesan politik, sosial, atau pribadi. Meskipun seringkali dianggap sebagai tindakan ilegal dan vandalisme, beberapa graffiti diakui sebagai bentuk seni yang sah dan dihargai. Graffiti memiliki sejarah yang kaya, dimulai dari gerakan graffiti di kota New York pada tahun 1960-an hingga saat ini, di mana telah menjadi bagian penting dari budaya perkotaan di seluruh dunia.</p>
            </div>
            <div class="about-img">
                <img src="assets/Snapinsta.app_351410646_988998618939538_4661969300186386440_n_1024.jpg" alt="">
            </div>
            <div class="img-tiban">
                <img src="assets/kanan1.jpg" alt="">
            </div>
        </div>
    </main>

    <?php
    if(isset($_GET["halaman"])){
        if($_GET["halaman"] == "article"){
            include 'article.php';
        }
    }
    ?>
    <article id="article">
        <h2 class="text-artikel">Our Article</h2>
            
        <div class="card-content">
            <?php
            $sql = "SELECT * FROM tb_artikel order by id_artikel ASC";
            $hasil = mysqli_query($koneksi, $sql);

            $artikel = mysqli_num_rows($hasil);
            while($row = mysqli_fetch_assoc($hasil)){
            ?>
            
            <div class="card">
                <img src="assets/<?= $row['gambar_artikel']?>" alt="">
                <div class="judul-artikel">
                    <?php 
                        $judul_artikel = $row['judul_artikel'];
                        $potongan_judul = substr($judul_artikel, 0, 64);
                        echo "<h2>$potongan_judul</h2>"
                    ?>
                </div>
                <div class="isi-artikel">
                     <?php 
                        $isi_artikel = $row['isi_artikel'];
                        $potongan_isi = substr($isi_artikel, 0, 64 );
                        echo "<p>$potongan_isi</p>"
                     ?>
                </div>
                
                <div class="card-btn">
                    <a href="article.php?halaman=article&id=<?= $row['id_artikel'];?>">baca</a>
                </div>                
            </div>
            <?php
            }
            ?>
                
        </div>
    </article>
    
    
    
        
    
        

    <!-- Akhir Content -->

    <!-- FOOTER -->

    <footer>
        
    </footer>
</body>
</html>