<?php

$conn = new mysqli("localhost", "root", "", "youthanarchism");

// kalo gagal

if($conn -> connect_errno){
    echo"Gagal Terkoneksi ke Database" . $conn -> connect_error;
}

?>