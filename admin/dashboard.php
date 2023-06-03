<?php
    include "../crud/koneksi.php";

    session_start();

    if($_SESSION['status']!="admin"){
        header("Location: ../admin/login.php");
    }

    // if (!isset($_SESSION['admin'])) {
    //     header("Location: ../admin/dashboard.php");
    // }
     
    ?>
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
                <a href="">Dashboard</a>
            </div>
            <div class="list-item">
                <a href="">Article</a>
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
    <div class="dashboard">
        <?php echo "<h1>Selamat Datang, " . $_SESSION['status'] ."!". "</h1>"; ?>
        <p>aloo kamu</p>
    </div>
</body>
</html>