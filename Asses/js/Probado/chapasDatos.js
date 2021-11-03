function agregarDatoCh(serie,desde,hasta,observacion,usuario){

	cadena = "serie=" + serie +
	"&desde=" + desde +
	"&hasta=" + hasta +
	"&observacion=" + observacion +
	"&usuario=" + usuario;
	
	

	$.ajax({
		type:"POST",
		url:"Helpers/grabarChapas.php",
		data:cadena,
		success: function(r){
			if(r == 1){
				alertify.success('Agregado con Exito <i class="far fa-thumbs-up"></i>');
				location.reload();

			}else{
				alertify.error('¿Error al Grabar <i class="fas fa-exclamation-circle"></i>');
			}
		}
	});
}

function editarDatosCh(datos){
	d = datos.split('||');

	$('#id_chapa').val(d[0]);
	$('#serieu').val(d[2]);
	$('#desdeu').val(d[3]);
	$('#hastau').val(d[4]);
	$('#observacionu').val(d[5]);	

}

function actualizarDatoCh(){

	id_chapa=$('#id_chapa').val();
	serie=$('#serieu').val();
	desde=$('#desdeu').val();
	hasta=$('#hastau').val();
	observacion=$('#observacionu').val();
	


	cadena = "id_chapa=" + id_chapa +
	"&serie=" + serie +
	"&desde=" + desde +
	"&hasta=" + hasta +
	"&observacion=" + observacion;
	
;


	$.ajax({
		type:"POST",
		url:"Helpers/actualizarDatos_Chapas.php",
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


function confirmarLiberacionCh(id_chapa){
	alertify.confirm('Liberar Registro', 'Estas Seguro de Liberar el Registro?',
	 function(){ eliminarDatos(id_chapa) }
                , function(){ alertify.error('Operación Cancelada')});

}

function eliminarDatos(id_chapa){
	cadena = "id_chapa=" + id_chapa;

	$.ajax({
		type:"POST",
		url:"Helpers/liberarDatos_Cinta.php",
		data:cadena,
		success: function(r){
			if(r == 1){
				alertify.success('Liberado con Exito <i class="far fa-thumbs-up"></i>');
				location.reload();
				
			}else{
				alertify.error('Error al Liberar <i class="fas fa-exclamation-circle"></i>');
			}
		}
	});
}