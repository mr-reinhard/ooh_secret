
// simpan data daftar login
function askSimpanDataRegister(){
    Swal.fire({
        title: 'Simpan Username & Password?',
        text: "Mending di cek dulu!",
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

function askSimpanDataUserName(){
    Swal.fire({
        title: 'Simpan Username ?',
        text: "Mending cek dulu!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Simpan'
    }).then((result) => {
        if (result.isConfirmed) {
            simpanUserName();
        }
    })
}

function askSimpanDataPosting(){
    Swal.fire({
        title: 'Posting ?',
        text: "Mending cek dulu!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Simpan'
    }).then((result) => {
        if (result.isConfirmed) {
            simpanDataPosting();
        }
    })
}

function askHapusDataPosting(){
    Swal.fire({
        title: 'Hapus Posting ?',
        text: "Mending cek dulu!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Simpan'
    }).then((result) => {
        if (result.isConfirmed) {
            hapusDataPosting();
        }
    })
}

function askUpdateDataPosting(){
    Swal.fire({
        title: 'Update Posting ?',
        text: "Mending cek dulu!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Simpan'
    }).then((result) => {
        if (result.isConfirmed) {
            updateDataPosting();
        }
    })
}

function updateDataPosting(){
    var idPost = $("#id_identityPosting").val();
    var textPost = $("#idTextEditComment").val();
    $.ajax({
        url:"koneksi/crud.php?aksi=updatePostingan",
        type:"POST",
        data:{
            identityPosting:idPost,
            idTextEditComment:textPost,
        },
        success:function(data)
        {
            load_listPostingByUser();
        },
        error:function(xhr, status, error)
        {
            console.log(xhr. responseText);
        }
    })
}

function hapusDataPosting(){
    var idPosting = $("#idBtnHapusPosting").val();
    $.ajax({
        url:"koneksi/crud.php?aksi=hapusPostingByUser",
        type:"POST",
        data:{
            idPost:idPosting
        },
        success:function(data)
        {
            load_listPostingByUser();
        },
        error:function(xhr, status, error)
        {
            console.log(xhr.responseText);
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

function cekUser(){
    $.ajax({
        url:"koneksi/crud.php?aksi=cekUserTersedia",
        type:"POST",
        dataType:"JSON",
        success:function(data)
        {
            if (data.length === 0) {
                load_buatUsername();
            }
            else{
                load_timeLine();
            }
        },
        error:function(xhr, status, error)
        {
            console.log(xhr.responseText);
        }
    })
}

function simpanUserName(){
    var formDataUsername = $("#idFormBuatUsername").serialize();
    $.ajax({
        url:"koneksi/crud.php?aksi=simpanUsernameBaru",
        type:"POST",
        data:formDataUsername,
        success:function(data)
        {
            usernameBerhasilDibuat();
            load_timeLine();
        },
        error:function(xhr, status, error)
        {
            console.log(xhr.responseText);
        }
    })
}

function requestSemuaPosting(){
    $.ajax({
        url:"koneksi/crud.php?aksi=fetchSemuaPosting",
        type:"POST",
        dataType:"JSON",
        success:function(data)
        {
            tampilkanSemuaPosting(data);
        },
        error:function(xhr, status, error)
        {
            console.log(xhr.responseText);
        }

    })
}

// tampilkan semua posting hanya di 1 user saja
function requestPostingByUser(){
    $.ajax({
        url:"koneksi/crud.php?aksi=fetchPostingByUser",
        type:"POST",
        dataType:"JSON",
        success:function(data)
        {
            tampilkanPostingByUser(data);
        },
        error:function(xhr, status, error)
        {
            console.log(xhr.responseText);
        }
    })
}

// =======================================
// buka form edit posting
function requestBukaFormEditPostingan(nilaiTombol){

    $.ajax({
        url:"koneksi/crud.php?aksi=fetchPostingByIdPosting",
        type:"POST",
        data:{id_posting:nilaiTombol},
        dataType:"JSON",
        success:function(data)
        {
            //console.log(nilaiTombol)
            tampilkanFormEditPosting(data);
        },
        error:function(xhr, status, error)
        {
            console.log(xhr. responseText);
        }
    })
}

function tampilkanFormEditPosting(data){

    var cardPostingan = $("#idDivPostingByUser");
    cardPostingan.empty();

    $.each(data, function(index, item){
        var appendFormEdit = `<form method="post" id="idFormUpdatePosting" autocomplete="off">
        <div class="card">
            <h5 class="card-header">Edit Posting</h5>
            <div class="card-body">
                <div class="mb-3">
                    <label for="idTextComment">Edit postingan Lo !</label>
                    <input type="text" id="id_identityPosting" value="${item.id_posting}" readonly hidden>
                    <textarea class="form-control" id="idTextEditComment" cols="3" rows="5" maxlength="250">${item.judul_posting}</textarea>
                    <div id="idTextComment" class="form-text">Edit postingan mu dengan tidak sopan dan kurang ajar.</div>
                </div>
                <button type="submit" class="btn"><i class="fa-solid fa-rocket"></i> Cuuuzzz</button>
            </div>
        
        </div>
    </form>`;
        cardPostingan.append(appendFormEdit);
    })

}

// =======================================


function tampilkanPostingByUser(data){
    var cardPostingByUser = $("#idDivPostingByUser");
    cardPostingByUser.empty();

    $.each(data, function(index, item){
        var tanggalPosting = moment(item.tanggal_posting).format("MMMM, DD YYYY HH:mm:ss");
        var appendCardPostingByUser = `<div class="col-md-6 mx-auto mt-5">
        <div class="card">
            <div class="card-body">
                <img src="../asset/image/question.png" class="rounded img-thumbnail" alt="Foto Pengguna" width="50px" height="50px">
                <h5 class="card-title">${item.nama_user}</h5>
                <h6 class="card-subtitle mb-2 text-muted">${tanggalPosting}</h6>
                <p class="card-text">${item.judul_posting}</p>

                    <div class="d-flex justify-content-between align-items-center">   
                        <button type="button" class="btn" id="idBtnLihatCommentPosting"><i class="fa-solid fa-comment-dots"></i> 10 Comment</button>
                        <button type="button" class="btn" id="idBtnEditPostingan" value="${item.id_posting}"><i class="fa-solid fa-file-pen"></i> Edit</button>
                        <button type="button" class="btn" id="idBtnHapusPosting" value="${item.id_posting}"><i class="fa-solid fa-trash-can"></i> Hapus</button>
                    </div>
            </div>
        </div>
    </div>`;
        cardPostingByUser.append(appendCardPostingByUser);
    })
}

function tampilkanSemuaPosting(data){
    var cardPosting = $("#idMainPosting");
    cardPosting.empty();

    $.each(data, function(index, item){
        var tanggalPosting = moment(item.tanggal_posting).format("MMMM, DD YYYY HH:mm:ss");
        var AppendCardPosting = `<div class="col-md-6 mx-auto mt-5">
        <div class="card">
            <div class="card-body">
                <img src="../asset/image/question.png" class="rounded img-thumbnail" alt="Foto Pengguna" width="50px" height="50px">
                <h5 class="card-title">${item.nama_user}</h5>
                <h6 class="card-subtitle mb-2 text-muted">${tanggalPosting}</h6>
                <p class="card-text">${item.judul_posting}</p>
                <div id="divIdComment">
                    <div class="d-flex justify-content-between align-items-center">   
                        <button type="button" class="btn" id="idBtnLihatKomen"><i class="fa-solid fa-comment-dots"></i> 10 Comment</button>
                        <button type="button" class="btn" value="${item.id_user}"><i class="fa-solid fa-comments"></i> Chat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>`;
        cardPosting.append(AppendCardPosting);
    })
    
}

function simpanDataPosting(){
    var formPosting = $("#idFormPosting").serialize();
    $.ajax({
        url: "koneksi/crud.php?aksi=simpanPosting",
        type: "POST",
        data: formPosting,
        success: function (data)
        {
            load_timeLine();
        }
    })
}