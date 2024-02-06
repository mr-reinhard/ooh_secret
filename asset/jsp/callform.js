// Login Section
function load_daftar(){
    $.ajax({
      url:'modul/login/daftar.html',
      type:'GET',
      success:function(data){
        $('#mainContentLogin').html(data);
      }
    })
  }

function load_login(){
    $.ajax({
      url:'modul/login/masuk.php',
      type:'GET',
      success:function(data){
        $('#mainContentLogin').html(data);
      }
    })
  }

// End login Section

// Modul Posting
function load_timeLine(){
  $.ajax({
    url:'posting/timeline.html',
    type:'GET',
    success:function(data){
      $('#idMainContentUser').html(data);
    }
  })
}

function load_newPosting(){
  $.ajax({
    url:'posting/posting_baru.html',
    type:'GET',
    success:function(data){
      $('#idMainContentUser').html(data);
    }
  })
}
// end module posting

// module akun
function load_userAccount(){
  $.ajax({
    url:'akun/lihat_akun.html',
    type:'GET',
    success:function(data){
      $('#idMainContentUser').html(data);
    }
  })
}

function load_hapusAccount(){
  $.ajax({
    url:'akun/hapus_akun.html',
    type:'GET',
    success:function(data){
      $('#idMainContentUser').html(data);
    }
  })
}

function load_buatUsername(){
  $.ajax({
    url:'akun/form_username.html',
    type:'GET',
    success:function(data){
      $('#idMainContentUser').html(data);
    }
  })
}

// module posting
function load_listPostingByUser(){
  $.ajax({
    url:'posting/list_posting.html',
    type:'GET',
    success:function(data){
      $('#idMainContentUser').html(data);
    }
  })
}

// end of module posting

// module chat
function load_allChatList(){
  $.ajax({
    url:'chat/semua_chat.html',
    type:'GET',
    success:function(data){
      $('#idMainContentUser').html(data);
    }
  })
}

function load_formChat(){
  $.ajax({
    url:'chat/mode_chat.html',
    type:'GET',
    success:function(data){
      $('#idMainContentUser').html(data);
    }
  })
}