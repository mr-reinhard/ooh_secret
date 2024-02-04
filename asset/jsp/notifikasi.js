
function Informasi(){
  var url = "https://sweetalert2.github.io/";
  Swal.fire({
    title: "Capt Bon",
    text: "Visil my REPO at https://reinhard.github.io/",
    imageUrl: "../asset/image/about.jpg",
    imageWidth: 400,
    imageHeight: 300,
    imageAlt: "Custom image"
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
        icon: "error",
        title: "Silahkan Login"
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