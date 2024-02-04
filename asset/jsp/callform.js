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