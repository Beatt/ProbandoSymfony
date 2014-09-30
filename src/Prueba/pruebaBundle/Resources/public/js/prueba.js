function cargarEventos() {

	var button = document.getElementById("button");
	button.onclick = lanzarEvento;

}

function lanzarEvento() {
	alert("Lanzando evento");
}

window.onload = cargarEventos;