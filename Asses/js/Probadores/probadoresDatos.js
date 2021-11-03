function agregarDatoProbador(nombre,cantidad,usuario){

	cadena = "nombre=" + nombre +
	"&cantidad=" + cantidad +
	"&usuario=" + usuario;
	
	

	$.ajax({
		type:"POST",
		url:"Helpers/grabarProbador.php",
		data:cadena,
		success: function(r){
			if(r == 1){
				alertify.success('Agregado con Exito <i class="far fa-thumbs-up"></i>');
				location.reload();

			}else{
				alertify.error('Error al Grabar <i class="fas fa-exclamation-circle"></i>');
			}
		}
	});
}

function editarDatosProbador(datos){
	d = datos.split('||');

	$('#id_probador').val(d[0]);
	$('#nombreu').val(d[2]);
	$('#cantidadu').val(d[3]);

}

function actualizarDatoProbador(){

	id_probador=$('#id_probador').val();
	nombre=$('#nombreu').val();
	cantidad=$('#cantidadu').val();


	cadena = "id_probador=" + id_probador +
	"&nombre=" + nombre +
	"&cantidad=" + cantidad;
	
;


	$.ajax({
		type:"POST",
		url:"Helpers/actualizarDatos_Probador.php",
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


