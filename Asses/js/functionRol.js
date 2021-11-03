function openRol(){
	$('#modalRol').modal('show');
}

function openUsuario(){
	document.querySelector("#id_usuario").value = "";
	document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
	document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
	document.querySelector('#btnText').innerHTML = "Guardar";
	document.querySelector('#titleModal').innerText = "Usuario Nuevo";
	document.querySelector('#formUsuario').reset();
	$('#modalUsuario').modal('show');
}



function openPintura(){
	$('#modalPintura').modal('show');
}

function openRuedas(){
	$('#modalRuedas').modal('show');
}

function openCinta(){
	$('#modalCinta').modal('show');
}

function openProbado(){
	$('#modalProbado').modal('show');	
}

function openDeposito(){
	$('#modalDeposito').modal('show');
}

function openCuatro_r(){
	$('modalCuatroRuedas').modal('show');
}