function hizoClick() {
  var usuario = document.getElementById("correo").value;
  var contrasenia = document.getElementById("contrasenia").value;
  var tipo = document.getElementById("rol").value;

  if (usuario == "", contrasenia="", tipo="") {
    Swal.fire({
    position: 'top-end',
    icon: 'error',
    title: 'Ingrese su correo electronico',
    showConfirmButton: false,
    timer: 1500
    });
} else {
    Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Enviado correctamente',
    showConfirmButton: false,
    timer: 3500
    });
    }
}
