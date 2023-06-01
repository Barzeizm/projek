<?php 
 
include 'koneksi.php';

session_start();

$admin = $_POST['admin'];
$pw_admin = md5($_POST['pw_admin']);
$sql=mysqli_query($conn,"select * from tb_admin where admin='$admin' and pw_admin='$pw_admin'");
$cek=mysqli_num_rows($sql);

if($cek>0){
    $_SESSION['admin'] = $data['admin'];
    $_SESSION['status'] = "login";
    header("Location: ../admin/dashboard.php");
}
else{
    header("Location: ../admin/login.php");    
}
?>