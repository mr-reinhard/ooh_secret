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
    <script src="../asset/jsp/crud.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
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
        #idMainPosting{
            overflow-y: auto;
            max-height: 600px;
        }
    </style>

    <script>
        $(document).ready(function(){
            //load_formChat();
            //load_allChatList();
            //load_listPostingByUser();
            cekUser();
            //fetchSemuaPosting();
            //load_timeLine();
            //load_newPosting();
            //load_userAccount();
            //load_hapusAccount();

            $("#idMainContentUser").on("click", "#idBtnPostingBaru", function(){
                load_newPosting();
            })

            $("#idMainContentUser").on("click", "#idBtnKembali", function(){
                load_timeLine();
            })

            $("#idMainContentUser").on("click", "#idBtnSetupAkun", function(){
                load_hapusAccount();
            })

            $("#idMainContentUser").on("click", "#idBtnHapusPosting", function(){
                askHapusDataPosting();
            })

            // buka form edit
            $("#idMainContentUser").on("click", "#idBtnEditPostingan", function(){
                requestBukaFormEditPostingan();
            })

            $("#idMenuUserAccount").click(function(){
                load_userAccount();
            })

            $("#idMenuAbout").click(function(){
                Informasi();
            })

            $("#idMenuUserPosting").click(function(){
                load_timeLine();
            })

            $("#idMenuPostingByUser").click(function(){
                load_listPostingByUser();
            })

            $("#idMainContentUser").on("submit", "#idFormBuatUsername", function(e){
                e.preventDefault();
                askSimpanDataUserName();
            })

            // simpan data comment
            $("#idMainContentUser").on("submit", "#idFormPosting", function(e){
                e.preventDefault();
                askSimpanDataPosting();
            })

        })
    </script>
</head>
<body>

    <div id="idMainContentUser"></div>

    <footer>
        <nav class="navbar navbar-light bg-light">
            <div class="container">

                    <a class="navbar-brand" href="#" id="idMenuUserAccount"><i class="fa-solid fa-user fa-lg"></i></a>
                    <a class="navbar-brand" href="#"><i class="fa-solid fa-comments fa-lg"></i></a>
                    <a class="navbar-brand" href="#" id="idMenuUserPosting"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                    <a class="navbar-brand" href="#" id="idMenuPostingByUser"><i class="fa-solid fa-list fa-lg"></i></a>
                    <a class="navbar-brand" href="#" id="idMenuAbout"><i class="fa-solid fa-circle-info fa-lg"></i></a>
                    

            </div>
        </nav>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>