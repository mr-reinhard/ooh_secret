
<form method="post" action="modul/koneksi/cek_login.php" id="idFormLogin" autocomplete="off">

    <label for="" class="sr-only">Username</label>
    <!-- 'autofocus' will highlight the input column initially -->
    <input type="text" name="nameUserName" id="idInputUserName" class="form-control mb-2" placeholder="Username" required autofocus>
    <!-- 'sr-only' will hide the text : 'Password'. So, 'Password' will be invisible -->
    <label for="" class="sr-only">Password</label>
    <input type="password" name="nameUserPassword" id="idInputPassword" class="form-control mb-2" placeholder="Password" required>

    <div class="mb-3">
        <a href="#" id="idBuatAkun">Buat akun</a>
    </div>
    <!-- 'btn-block' will make the button wider -->
    <button class="btn btn-lg btn-block" type="submit">
        Login
    </button>

</form>