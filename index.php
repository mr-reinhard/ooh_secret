<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="asset/image/logo1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="asset/jsp/callform.js"></script>
    <script src="asset/jsp/notifikasi.js"></script>
    <script src="asset/jsp/crud.js"></script>
    <title>Ooh Secret! - Login</title>
    <style>
        html, body {
            height: 100%;
        }

        .form-login {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
        .btn{
            background-color: #fdc012;
        }
        footer {
            background-color: #333; /* Warna latar belakang footer */
            color: #fff; /* Warna teks footer */
            text-align: center; /* Pusatkan teks di footer */
            padding: 20px; /* Ruang padding untuk footer */
            position: fixed; /* Footer tetap di bagian bawah layar */
            left: 0;
            bottom: 0;
            width: 100%; /* Lebar footer 100% dari lebar layar */
        }
    </style>

    <script>
        $(document).ready(function(){
            load_login();
            //load_daftar();

            $("#mainContentLogin").on("click", "#idBuatAkun",function(){
                load_daftar();
            })

            $("#mainContentLogin").on("click", "#idKembali",function(){
                load_login();
            })

            $("#mainContentLogin").on("submit", "#idFormRegister",function(e){
                e.preventDefault();
                askSimpanDataRegister();
            })


        })
    </script>
</head>
<body>

<?php 
if (isset($_GET['pesan'])) {
    # code...
    if ($_GET['pesan'] == "gagal") {
        # code...
        echo "<script type = 'text/javascript'>usernamePasswordSalah();</script>";
    }
    else{
        if ($_GET['pesan'] == "logout") {
            # code...
            echo "<script type = 'text/javascript'>logoutBerhasil();</script>";
        }
        else{
            if ($_GET['pesan'] == "belum_login") {
                # code...
                echo "<script type = 'text/javascript'>kamuBelumLogin();</script>";
            }
        }
    }
}
?>

    <div class="form-login">

        <img class="justify-content-center" src="asset/image/logo1.png" alt="Ooh!">
        <!-- 'sr-only' will hide the text : 'Email Address'. So, 'Email Address' will be invisible -->

        <div id="mainContentLogin"></div>

    </div>

    <footer>Reverse Engineering for Ooh! 1.0.6 APK <br> See documentation on my GITHUB </footer>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>