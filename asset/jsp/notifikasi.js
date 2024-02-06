
function Informasi(){
  var linkGithub = $("<a href='https://github.com/mr-reinhard/ooh_secret.git' class='btn'><i class='fa-brands fa-github'></i> Mr Reinhard</a>");
  Swal.fire({
    title: "Capt Bon",
    html: "Contribute are allowed in Github "+linkGithub.prop('outerHTML'),
    imageUrl: "../asset/image/saya.jpg",
    imageWidth: 300,
    imageHeight: 400,
    imageAlt: "Custom image",
  });
}

function pendaftaranBerhasil() {

    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        }
      });
      Toast.fire({
        icon: "success",
        title: "Akun berhasil dibuat"
      });

}

function logoutBerhasil() {

    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        }
      });
      Toast.fire({
        icon: "info",
        title: "Logout Berhasil"
      });

}

function usernameBerhasilDibuat() {

    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        }
      });
      Toast.fire({
        icon: "success",
        title: "Username berhasil dibuat"
      });

}

function usernamePasswordSalah() {
    Swal.fire({
        title: "Ooopssss...",
        text: "Password / Username Salah ngab.",
        icon: "error"
      });
}

function kamuBelumLogin() {
    Swal.fire({
        title: "Hmmmm...",
        text: "Login dulu ngab.",
        icon: "info"
      });
}