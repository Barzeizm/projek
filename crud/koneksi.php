<?php

$koneksi = new mysqli("localhost", "root", "", "youthanarchism");

// kalo gagal

if($koneksi -> connect_errno){
    echo"Gagal Terkoneksi ke Database" . $conn -> connect_error;
}

?>