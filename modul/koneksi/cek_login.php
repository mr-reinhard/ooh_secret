<?php 
include 'koneksi.php';


session_start();

$uName = $_POST['nameUserName'];
$uPass = $_POST['nameUserPassword'];

$query = "SELECT * FROM tbl_login WHERE nama_login LIKE '%".$uName."%' AND password_login LIKE '%".$uPass."%'";
$run = mysqli_query($koneksi, $query);

if (mysqli_num_rows($run) > 0) {
    # code...
    while ($hasil = mysqli_fetch_array($run)) {
        # code...
        $data = $hasil['id_login'];
        $_SESSION['sessionIdUserLogin'] = $data;
    }
    $_SESSION['sessionNamaLogin'] = $uName;
    $_SESSION['status'] = "login";
    header ("Location:../index.php?pesan=sukses");
}
else{
    header("Location:../../index.php?pesan=gagal");
}
?>