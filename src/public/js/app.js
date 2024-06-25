

function openModal(modalId) {
	document.getElementById(modalId).style.display = "block";
}

function closeModal(modalId) {
	document.getElementById(modalId).style.display = "none";
}

window.onclick = function (event) {
	var modal1 = document.getElementById('menu1Modal');
	var modal2 = document.getElementById('menu2Modal');
	if (event.target == modal1) {
		modal1.style.display = "none";
	}
	if (event.target == modal2) {
		modal2.style.display = "none";
	}
}
