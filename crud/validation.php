<?php 
 
include 'koneksi.php';

session_start();

$admin = $_POST['admin'];
$pw_admin = md5($_POST['pw_admin']);
$sql=mysqli_query($koneksi,"select * from tb_admin where admin='$admin' and pw_admin='$pw_admin'");
$cek=mysqli_num_rows($sql);

if($cek>0){
    $_SESSION['admin'] = $data['admin'];
    $_SESSION['status'] = "admin";
    header("Location: ../admin/dashboard.php");
}
else{
    header("Location: ../admin/login.php");    
}

// error_reporting(0);
 
// session_start();
 
// if (isset($_SESSION['admin'])) {
//     header("Location: ../admin/dashboard.php");
// }
 
// if (isset($_POST['submit'])) {
//     $admin = $_POST['admin'];
//     $pw_admin = md5($_POST['pw_admin']);
 
//     $sql = "SELECT * FROM tb_admin WHERE admin='$admin' AND pw_admin='$pw_admin'";
//     $result = mysqli_query($conn, $sql);
//     if ($result->num_rows > 0) {
//         $row = mysqli_fetch_assoc($result);
//         $_SESSION['admin'] = $row['admin'];
//         header("Location: ../admin/dashboard.php");
//     } else {
//         echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
//     }
// }
?>