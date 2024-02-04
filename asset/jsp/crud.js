
// simpan data daftar login
function askSimpanDataRegister(){
    Swal.fire({
        title: 'Simpan Username & Password?',
        text: "Mohon di check ulang sebelum menyimpan data!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Simpan'
    }).then((result) => {
        if (result.isConfirmed) {
            simpanDataRegister();  
            pendaftaranBerhasil();
            load_login(); 
        }
    })
}

function simpanDataRegister(){
    var formData = $("#idFormRegister").serialize();
    $.ajax({
        url: "modul/koneksi/crud.php?aksi=simpanRegister",
        type: "POST",
        data:formData,
        success: function (data)
        {
            console.log("data telah tersimpan");
        }
    })
}

function cobaLogin() {
    var uName = $("#idInputUserName").val();
    var uPazz = $("#idInputPassword").val();
    $.ajax({
        url: "modul/koneksi/crud.php?aksi=loginPertama",
        type: "POST",
        data: {
            nama:uName,
            pass:uPazz,
        },
        dataType: "JSON",
        success: function (data) {

            if (data.length === 0) {
                //usernamePasswordSalah();
                console.log(data);
                $("#idInputUserName").val("");
                $("#idInputPassword").val("");
            }
            else{
                console.log(data);
            }
        },
        error:function(xhr, status, error)
        {
            console.log(xhr.responseText);
        }
    })
}

function cekLogin(){
    $.ajax({
        url:"modul/koneksi/crud.php?aksi=cekLogin",
        type:"POST",
        dataType:"JSON",
        success:function(data)
        {
            if (data.length === 0) {
             console.log("SESSION tidak ditemukan")   
            }
        },
        error:function(xhr, status, error)
        {
            console.log(xhr.responseText);
        }
    })
}