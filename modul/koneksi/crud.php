<?php 
include 'koneksi.php';

function randomIdPosting(){
    $unique_id = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
    $output_id = substr(str_shuffle($unique_id),0,16);
    return $output_id;
}

function randomIdRegister(){
    $unique_id = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
    $output_id = substr(str_shuffle($unique_id),0,16);
    return $output_id;
}


switch ($_GET['aksi']) {

    case 'simpanComment':
        # code...

        $idPosting = randomIdPosting();
        $postingComment = $_POST['namePosting'];

        $sql = "INSERT INTO posting(id_posting,judul_posting)VALUES('$idPosting','$postingComment')";
        $run = mysqli_query($koneksi, $sql);

        break;

    case 'simpanRegister':
        # code...
        $idRegister = randomIdRegister();
        $userName = $_POST['nameRegisterUsername'];
        $passWord = $_POST['nameRegisterPassword'];

        $sql = "INSERT INTO tbl_login(id_login,nama_user,password_user)VALUES('$idRegister','$userName','$passWord')";
        $run = mysqli_query($koneksi, $sql);
        break;

    case 'loginSession':
        # code...
        $uName = $_POST['dataName'];
        $uPass = $_POST['dataPazz'];

        $query = "SELECT * FROM tbl_login WHERE nama_user LIKE '%".$uName."%' AND password_user LIKE '%".$uPass."%'";
        $runQuery = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($runQuery) > 0) {
            # code...
            $tampungData = array();

            while ($hasil = mysqli_fetch_assoc($runQuery)) {
                # code...
                $tampungData[] = $hasil;
            }
            echo json_encode($tampungData);
        }
        else{
            echo json_encode(array());
        }
        break;

    case 'loginPertama':
        # code...
        session_start();

        $uName = $_POST['nama'];
        $uPass = $_POST['pass'];

        $query = "SELECT * FROM tbl_login WHERE nama_user LIKE '%".$uName."%' AND password_user LIKE '%".$uPass."%'";
        $cek  = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($cek) > 0) {
            # code...
            $hasilData = array();
            while ($hasil = mysqli_fetch_assoc($cek)) {
                # code...
                $_SESSION['nama_user'] = $uName;
                $hasilData[] = $hasil;
                echo json_encode($hasilData);
            }
        }
        else{
            echo json_encode(array());
        }
        break;

    case 'loginKedua':
        # code...
        $uName = $_POST['nama'];
        $uPass = $_POST['pass'];

        $run = "SELECT * FROM tbl_login WHERE nama_user LIKE '%".$uName."%' AND password_user LIKE '%".$uPass."%'";
        $cek = mysqli_query($koneksi, $run);

        if (mysqli_num_rows($cek) > 0) {
            # code...
            $tampungData = array();
            while ($data = mysqli_fetch_assoc($cek)) {
                # code...
                $tampungData[] = $data;
            }
            echo json_encode($tampungData);
        }
        else{
            echo json_encode(array());
        }
        break;

    case 'cekLogin':
        # code...
        session_start();

        $cekLogin = $_SESSION['nama_user'];
        if ($cekLogin == "") {
            # code...
            echo json_encode(array());
        }
        break;

    case 'logout':
        # code...
        session_unset();
        session_destroy();

        header("Location:../index.html");
        break;
    
    default:
        # code...
        break;
}
?>