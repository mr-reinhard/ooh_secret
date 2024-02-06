<script>
    $(document).ready(function(){


        // $(document).ready(function () {
        //     $('#idInputPassword').on("input", function () {
        //         var value = $(this).val();
        //         var maskedValue = value.replace(/./g, '?');
        //         $(this).val(maskedValue);
        //     });
        // });


        // nyalain kalo butuh
        // var maskingArray = ["A","K","U","S","A","Y","A"];
        // $("#idInputPassword").on("input", function(){
        //     var valuePass = $(this).val();
        //     var maskingValue = "";

        //     for(var i = 0; i < valuePass.length; i++){
        //         var maskingIndex = i % maskingArray.length;
        //         maskingValue += maskingArray[maskingIndex];
        //     }
        //     $(this).val(maskingValue);
        // })

    })
</script>


<form method="post" action="modul/koneksi/cek_login.php" id="idFormLogin" autocomplete="off">
    <!-- 'autofocus' will highlight the input column initially -->
    <div class="input-group mt-5">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
        <input type="text" name="nameUserName" class="form-control" id="idInputUserName" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mt-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
        <input type="text" name="nameUserPassword" class="form-control" id="idInputPassword" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="mb-3">
        <a href="#" id="idBuatAkun">Buat akun</a>
    </div>
    <!-- 'btn-block' will make the button wider -->
    <button class="btn btn-lg btn-block" type="submit">
        Login
    </button>

</form>