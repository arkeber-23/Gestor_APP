const FORMULARIO = document.getElementById("formularioBuscar");
const TBODY = document.getElementById("listarDatos");
const BASE_URL = window.location.href;
FORMULARIO.addEventListener("submit", async (e) => {
  e.preventDefault();
  const FRMDATA = new FormData(FORMULARIO);
  let tr = "";
  const response = await fetch(BASE_URL + "/inicio/buscarPorPagina", {
    method: "POST",
    body: FRMDATA,
  });
  const datos = await response.json();
  datos.forEach((dato) => {
    tr += ` <tr>
    <td scope="row">${dato.ID_CUENTA}</td>
    <td>${dato.PAGINA}</td>
    <td>${dato.EMAIL}</td>
    <td>${dato.PASSWORD}</td>
</tr>`;
  });
  TBODY.innerHTML = tr;
});
