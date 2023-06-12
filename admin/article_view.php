<?php

    $idad = $_GET['id'];
    $sql = mysqli_query($koneksi, "SELECT * FROM tb_artikel where id_artikel = $idad");
    $row = mysqli_fetch_array($sql);

?>

<link rel="stylesheet" href="../css/admin.css">


<div class="border-dashboard"></div>
<div class="dashboard-kanan">

    <img src="../assets/<?= $row['gambar_artikel'] ?>">
    <h2 class=""><?= $row ['judul_artikel']?></h2> <br>
    <p class=""><?= $row ['isi_artikel']?></p>

</div>