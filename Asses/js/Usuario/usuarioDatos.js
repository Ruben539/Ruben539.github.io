function agregarDatoUsu(nombre,correo,usuario,password,rol,puesto,foto){

	cadena = "nombre=" + nombre +
	"&correo=" + correo +
	"&usuario=" + usuario +
	"&password=" + password +
	"&rol=" + rol +
	"&puesto=" + puesto;
	
	

	$.ajax({
		type:"POST",
		url:"Helpers/grabarUsuario.php",
		data:cadena,
		success: function(r){
			if(r == 1){
				alertify.success('Agregado con Exito <i class="far fa-thumbs-up"></i> ');
				location.reload();

			}else{
				alertify.error('Error al Grabar <i class="fas fa-exclamation-circle"></i> ');
			}
		}
	});
}


function editarDatosUsu(datos){
	d = datos.split('||');

	$('#id_usuario').val(d[0]);
	$('#nombreu').val(d[1]);
	$('#correou').val(d[2]);
	$('#usuariou').val(d[3]);
	$('#passwordu').val(d[4]);
	$('#rolu').val(d[5]);
	$('#puestou').val(d[6]);
	

}

function actualizarDatoUsu(){

	id_usuario=$('#id_usuario').val();
	nombre=$('#nombreu').val();
	correo=$('#correou').val();
	usuario=$('#usuariou').val();
	password=$('#passwordu').val();
	rol=$('#rolu').val();
	puesto=$('#puestou').val();
	


	cadena = "id_usuario=" + id_usuario +
	"&nombre=" + nombre +
	"&correo=" + correo +
	"&usuario=" + usuario +
	"&password=" + password +
	"&rol=" + rol +
	"&puesto=" + puesto;
	
;


	$.ajax({
		type:"POST",
		url:"Helpers/actualizarDatos_Usu.php",
		data:cadena,
		success: function(r){
			if(r == 1){
				alertify.success('Actualizado con Exito <i class="far fa-thumbs-up"></i>');
				location.reload();

			}else{
				alertify.error('Error al Actualizar <i class="fas fa-exclamation-circle"></i>');
			}
		}
	});
}


function confirmarLiberacionUsu(id_usuario){
	alertify.confirm('<div class="bodyModal">'+
		'<h1 class="text-center"><i class="fas fa-file-alt"></i> Eliminar Usuario : '+id_usuario+'</h1>'+
		'<hr>'+
		'<div class="input-group text-center">'+
		'<h5 class="text-center"><i class="fas fa-user"></i> Usuarios - División Industrial</h5>'+
		'</div>'+
		'<br>'+
		'</div>',
	 function(){ eliminarDatos(id_usuario) }
                , function(){ alertify.error('Operación Cancelada')});

}

function eliminarDatos(id_usuario){
	cadena = "id_usuario=" + id_usuario;

	$.ajax({
		type:"POST",
		url:"Helpers/liberarDatos_Usu.php",
		data:cadena,
		success: function(r){
			if(r == 1){
				alertify.success('Eliminado con Exito <i class="far fa-thumbs-up"></i>');
				location.reload();
				
			}else{
				alertify.error('Error al Eliminar <i class="fas fa-exclamation-circle"></i>');
			}
		}
	});
}


function confirmarActivacionUsu(id_usuario){
	alertify.confirm('<div class="bodyModal">'+
		'<h1 class="text-center"><i class="fas fa-file-alt"></i> Reestablecer Usuario : '+id_usuario+'</h1>'+
		'<hr>'+
		'<div class="input-group text-center">'+
		'<h5 class="text-center"><i class="fas fa-user"></i> Usuarios - División Industrial</h5>'+
		'</div>'+
		'<br>'+
		'</div>',
	 function(){ activarUsuario(id_usuario) }
                , function(){ alertify.error('Operación Cancelada')});

}

function activarUsuario(id_usuario){
	cadena = "id_usuario=" + id_usuario;

	$.ajax({
		type:"POST",
		url:"Helpers/Activar_Usu.php",
		data:cadena,
		success: function(r){
			if(r == 1){
				alertify.success('Reestablecido con Exito <i class="far fa-thumbs-up"></i>');
				location.reload();
				
			}else{
				alertify.error('Error al Reestablecer <i class="fas fa-exclamation-circle"></i>');
			}
		}
	});
}


