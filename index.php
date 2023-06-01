<?
    include "crud/koneksi.php";
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
            <img src="assets/slide1.jpg" alt="" class="img-slides">
        </div>

    </div>

    <div id="article" class="card-content">
        <ul class="cards">
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="assets/124.jpg"></div>
                    <div class="card_content">
                        <h2 class="card_title">Card Grid Layout</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <a href="" class="card-btn">
                            <input type="button" value="Baca">
                        </a>
                    </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="https://picsum.photos/500/300/?image=5"></div>
                    <div class="card_content">
                        <h2 class="card_title">Card Grid Layout</h2>
                        <p class="card_text"></p>
                        <a href="" class="card-btn">
                            <input type="button" value="Baca">
                        </a>
                    </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="https://picsum.photos/500/300/?image=5"></div>
                    <div class="card_content">
                        <h2 class="card_title">Card Grid Layout</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <a href="" class="card-btn">
                            <input type="button" value="Baca">
                        </a>  
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <!-- Akhir Content -->
</body>
</html>