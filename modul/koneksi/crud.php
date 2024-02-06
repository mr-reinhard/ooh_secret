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

function randomIdUser(){
    $unique_id = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
    $output_id = substr(str_shuffle($unique_id),0,16);
    return $output_id;
}


/*
SESSION LIST MANIPULATE

- sessionNamaLogin <- nempel dari pas login
- sessionNamaUserPengguna <- dari pas buat username baru pertama kali, klo logout ke destroy
- sessionIdUserPengguna <- nempel dari pas login lagi
*/
switch ($_GET['aksi']) {

    case 'simpanPosting':
        # code...

        session_start();

        $idUserName = $_SESSION['sessionIdUserLogin'];
        $idPosting = randomIdPosting();
        $postingComment = $_POST['namePosting'];
        $tanggalReal = date('Y-m-d H:i:s');

        $swapIdUser = "SELECT * FROM tbl_user WHERE id_login LIKE '%".$idUserName."%'";
        $run = mysqli_query($koneksi, $swapIdUser);

        while ($hasil = mysqli_fetch_array($run)) {
            # code...
            $data = $hasil['id_user'];
            $_SESSION['sessionIdUserPengguna'] = $data;
        }

        $sql = "INSERT INTO posting(id_user,id_posting,judul_posting,tanggal_posting)VALUES('$data','$idPosting','$postingComment','$tanggalReal')";
        $run = mysqli_query($koneksi, $sql);

        break;

    case 'simpanRegister':
        # code...
        $idRegister = randomIdRegister();
        $userName = $_POST['nameRegisterUsername'];
        $passWord = $_POST['nameRegisterPassword'];

        $sql_1 = "INSERT INTO tbl_login(id_login,nama_login,password_login)VALUES('$idRegister','$userName','$passWord')";
        $sql_2 = "INSERT INTO tbl_user(id_login,id_user,nama_user)VALUES('$idRegister','','')";

        $run_1 = mysqli_query($koneksi, $sql_1);
        $run_2 = mysqli_query($koneksi, $sql_2);
        break;

    case 'cekUserTersedia':
        # code...
        session_start();
        $idLogin = $_SESSION['sessionIdUserLogin'];

        $sql = "SELECT * FROM tbl_user WHERE id_login LIKE '%".$idLogin."%'";
        $run = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($run) > 0) {
            # code...
            while ($hasil = mysqli_fetch_assoc($run)) {
                # code...
                $data = $hasil['id_user'];
            }
            echo json_encode($data);
        }
        else{
            echo json_encode($data);
        }

        break;

    case 'simpanUsernameBaru':
        # code...
        session_start();
        $idLogin = $_SESSION['sessionIdUserLogin'];
        $idUser = randomIdUser();
        $userName = $_POST['nameUserNameBaru'];
        $_SESSION['sessionNamaUserPengguna'] = $idUser;

        $insertTbluser = "UPDATE tbl_user SET id_user = '".$idUser."', nama_user = '".$userName."' WHERE id_login LIKE '%".$idLogin."%'";
        $runInsert = mysqli_query($koneksi, $insertTbluser);

        break;

    case 'fetchSemuaPosting':
        # code...
        $query = "SELECT * FROM vw_posting";
        $run = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($run) > 0) {
            # code...
            $tampungData = array();
            while ($hasil = mysqli_fetch_assoc($run)) {
                # code...
                $tampungData[] = $hasil;
            }
            echo json_encode($tampungData);
        }
        else{
            echo json_encode(array());
        }
        mysqli_close($koneksi);
        break;

    case 'fetchPostingByUser':
        # code...
        session_start();

        $idUser = $_SESSION['sessionIdUserLogin'];
        $qury = "SELECT * FROM vw_posting WHERE id_login LIKE '%".$idUser."%'";
        $run = mysqli_query($koneksi, $qury);

        if (mysqli_num_rows($run) > 0) {
            # code...
            $tampungData = array();
            while ($hasil = mysqli_fetch_assoc($run)) {
                # code...
                $tampungData[] = $hasil;
            }
            echo json_encode($tampungData);
        }
        else{
            echo json_encode(array());
        }
        mysqli_close($koneksi);
        break;

    case 'hapusPostingByUser':
        # code...
        $idPosting = $_POST['idPost'];
        $query = "DELETE FROM posting WHERE id_posting LIKE '%".$idPosting."%'";
        $run = mysqli_query($koneksi, $query);
        mysqli_close($koneksi);
        break;

    case 'fetchPostingByIdPosting':
        # code...
        $idPosting = $_POST['id_posting'];

        $sql = "SELECT * FROM posting WHERE id_posting LIKE '%".$idPosting."%'";
        
        $run = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($run) > 0) {
            # code...
            $tampungData = array();
            
            while ($hasil = mysqli_fetch_assoc($run)) {
                # code...
            $tampungData[] = $hasil;
            }
            echo json_encode($tampungData);
        }
        else{
            echo json_encode(array());
        }
        
        mysqli_close($koneksi);
        break;

    case 'updatePostingan':
        # code...
        $idPosting = $_POST['identityPosting'];
        $postingBaru = $_POST['idTextEditComment'];
        $sql = "UPDATE posting SET judul_posting = '$postingBaru' WHERE id_posting LIKE '%".$idPosting."%'";
        $runSql = mysqli_query($koneksi, $sql);
        break;
        # code...

        default:

        break;
}
?>