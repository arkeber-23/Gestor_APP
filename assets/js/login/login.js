const FORMULARIO = document.getElementById("formulario");
const BASE_URL = window.location.href;
FORMULARIO.addEventListener("submit", async (e) => {
  e.preventDefault();
  const FRMDATA = new FormData(FORMULARIO);

  const response = await fetch(BASE_URL + "/login/validarDatos", {
    method: "POST",
    body: FRMDATA,
  });
  const { status, msg, url } = await response.json();

  if (!status) {
    Swal.fire({
      icon: "error",
      title: msg,
    });
    FORMULARIO.reset();
    return;
  }
  Swal.fire({
    position: "top-end",
    icon: "success",
    title: msg,
    showConfirmButton: false,
    timer: 1500,
  });
  setTimeout(() => {
    window.location.href = url;
  }, 1500);
});
