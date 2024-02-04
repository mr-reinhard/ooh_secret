<?php 
include 'koneksi.php';


session_start();

$uName = $_POST['nameUserName'];
$uPass = $_POST['nameUserPassword'];

$query = "SELECT * FROM tbl_login WHERE nama_user LIKE '%".$uName."%' AND password_user LIKE '%".$uPass."%'";
$run = mysqli_query($koneksi, $query);

if (mysqli_num_rows($run) > 0) {
    # code...
    $_SESSION['nama_user'] = $uName;
    $_SESSION['status'] = "login";
    header ("Location:../index.php?pesan=sukses");
}
else{
    header("Location:../../index.php?pesan=gagal");
}
?>