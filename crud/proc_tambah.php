<?php
    include "koneksi.php";

    // $judul_artikel = $_POST['judul_artikel'];
    // $isi_artikel = $_POST['isi_artikel'];
    // $gambar_artikel= $_FILES['gambar_artikel']['name'];

    // if($gambar_artikel != "") {
    //     $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    //     $x = explode('.', $gambar_artikel);
    //     $ekstensi = strtolower(end($x));
    //     $file_tmp = $_FILES['gambar_artikel']['tmp_name'];
    //     $angka_acak = rand(1, 999);
    //     $nama_gambar_baru = $angka_acak.'-'.str_replace('', '-', $gambar_artikel);

    //     if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    //         move_uploaded_file($file_tmp, '../assets/'.$nama_gambar_baru);
    //         $query = "INSERT INTO tb_artikel (judul_artikel, isi_artikel, gambar_artikel) values ('$judul_artikel', '$isi_artikel', '$gambar_artikel')";
    //             $result = mysqli_query($koneksi, $query);
    //         if(!$result) {
    //             die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    //         } 
    //         else {
    //             echo "<script>alert('Data berhasil ditambahkan1!');window.location='../admin/home.php';</script>";
    //         }
    //     }
    //     else {
    //         echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='../admin/home.php?halaman=tambah';</script>";
    //     }
    // }

    $judul_artikel = $_POST['judul_artikel'];
    $isi_artikel = addslashes ($_POST['isi_artikel']);
    $gambar_artikel = $_FILES['gambar_artikel']['name'];
    $file_tmp = $_FILES['gambar_artikel']['tmp_name'];
    $x = explode('.',$gambar_artikel);
    $ekstensi = strtolower(end($x));
    $ekstensib = array('png', 'jpg', 'jpeg');
    if(in_array($ekstensi, $ekstensib) === true){
        move_uploaded_file($file_tmp, '../assets/'.$gambar_artikel);
        $sql = "INSERT INTO tb_artikel SET judul_artikel = '$judul_artikel', isi_artikel = '$isi_artikel', gambar_artikel = '$gambar_artikel'";
        $hasil = mysqli_query($koneksi, $sql);
        if(!$hasil){
            echo "<script>alert('Data gagal ditambahkan!');window.location='../admin/home.php';</script>";
        }
        else{
            echo "<script>alert('Data berhasil ditambahkan!');window.location='../admin/home.php';</script>";
        }
    }
    else{
        echo "<script>alert('Data gagal ditambahkan1!');window.location='../admin/home.php';</script>";
    }
?>