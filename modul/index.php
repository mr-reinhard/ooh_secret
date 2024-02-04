<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    session_start();

    if ($_SESSION['status'] != "login") {
        // code...
        header("location:../index.php?pesan=belum_login");
      }
    ?>
    <meta charset="UTF-8">
    <link rel="icon" href="../asset/image/logo1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../asset/jsp/callform.js"></script>
    <link rel="stylesheet" href="../asset/css/fontawesome.css">
    <script src="../asset/jsp/notifikasi.js"></script>
    <title>Ooh! Secret</title>
    <style>
        footer {
            background-color: #fdc012; /* Warna latar belakang footer */
            color: #fff; /* Warna teks footer */
            text-align: center; /* Pusatkan teks di footer */
            padding: 20px; /* Ruang padding untuk footer */
            position: fixed; /* Footer tetap di bagian bawah layar */
            left: 0;
            bottom: 0;
            width: 100%; /* Lebar footer 100% dari lebar layar */
        }
        .btn{
            background-color: #fdc012
        }
        .navbar{
            border-radius: 50px;
        }
        #idMainComment{
            overflow-y: auto;
            max-height: 500px;
        }
    </style>

    <script>
        $(document).ready(function(){
            load_timeLine();
            //load_newPosting();
            //load_userAccount();
            //load_hapusAccount();

            $("#idMainContentUser").on("click", "#idBtnPostingBaru", function(){
                load_newPosting();
            })

            $("#idMainContentUser").on("click", "#idBtnKembali", function(){
                load_timeLine();
            })

            $("#idMainContentUser").on("click", "#idBtnBackFormLihatAkun", function(){
                load_timeLine();
            })

            $("#idMainContentUser").on("click", "#idBtnSetupAkun", function(){
                load_hapusAccount();
            })

            $("#idMenuUserAccount").click(function(){
                load_userAccount();
            })

            $("#idMenuAbout").click(function(){
                Informasi();
            })

            // simpan data comment
            $("#idMainContentUser").on("submit", "#idFormKomentar", function(e){
                e.preventDefault();
                $.ajax({
                    url: "koneksi/crud.php?aksi=simpanComment",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function (data)
                    {
                        console.log("data berhasil disimpan");
                        //load_timeLine();
                    }
                })
            })

        })
    </script>
</head>
<body>

    <div id="idMainContentUser">
        <p></p>

    </div>

    <footer>
        <nav class="navbar navbar-light bg-light">
            <div class="container">

                    <a class="navbar-brand" href="#" id="idMenuUserAccount"><i class="fa-solid fa-user fa-lg"></i></a>
                    <a class="navbar-brand" href="#"><i class="fa-solid fa-comments fa-lg"></i></a>
                    <a class="navbar-brand" href="#"><i class="fa-solid fa-comment-dots fa-lg"></i></a>
                    <a class="navbar-brand" href="#" id="idMenuAbout"><i class="fa-solid fa-circle-info fa-lg"></i></a>
                    <a class="navbar-brand" href="koneksi/logout.php"><i class="fa-solid fa-right-from-bracket fa-lg"></i></a>

            </div>
        </nav>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>