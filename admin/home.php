<?php
    include "../crud/koneksi.php";

    session_start();

    if (!isset($_SESSION['admin'])) {
        header("Location: ../admin/login.php");
    }
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">

    <title>Document</title>
</head>
<body>
    <!-- ini Sidebar -->
    <div class="container">
        <div class="sidebar">
            <div class="list-item">
                <a href="home.php">Dashboard</a>
            </div>
            <div class="list-item">
                <a href="home.php?halaman=article_admin">Article</a>
            </div>
            <div class="list-item">
                <a href="">Gallery</a>
            </div>
            <div class="list-item">
                <a href="">Dashboard-4</a>
            </div>
            <div class="list-item">
                <a href="../crud/logout.php">
                    logout
                </a>
            </div>            
        </div>
    </div>
    <!-- Akhir Sidebar -->

    <!-- dashboard -->

    <?php 
        if(isset($_GET["halaman"])){
				if($_GET["halaman"] == "article_admin"){
					include 'article_admin.php';
				}
				elseif($_GET["halaman"] == "tambah"){
					include 'article_tambah.php';
				}
				elseif($_GET["halaman"] == "view"){
					include 'article_view.php';
				}
				elseif($_GET["halaman"] == "gallery"){
					include 'gallery_admin.php';
				}
                // elseif($_GET["halaman"] == "dashboard"){
				// 	include 'dashboard.php';
				// }
            }
            else{
                include 'dashboard.php';
            }
    ?>
</body>
</html>