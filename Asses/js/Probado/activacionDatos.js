function agregarDatoAC(modelo,nro_vehiculo,color,nro_chapa,observacion,usuario){

	cadena = "modelo=" + modelo +
	"&nro_vehiculo=" + nro_vehiculo +
	"&color=" + color +
	"&nro_chapa=" + nro_chapa +
	"&observacion=" + observacion +
	"&usuario=" + usuario;
	
	

	$.ajax({
		type:"POST",
		url:"Helpers/grabarActivacion.php",
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

function editarDatosAC(datos){
	d = datos.split('||');

	$('#id_activacion').val(d[0]);
	$('#modelou').val(d[2]);
	$('#nro_vehiculou').val(d[3]);
	$('#coloru').val(d[4]);
	$('#nro_chapau').val(d[5]);
	$('#observacionu').val(d[6]);
	

}

function actualizarDatoAC(){

	id_activacion=$('#id_activacion').val();
	modelo=$('#modelou').val();
	nro_vehiculo=$('#nro_vehiculou').val();
	color=$('#coloru').val();
	nro_chapa=$('#nro_chapau').val();
	observacion=$('#observacionu').val();
	


	cadena = "id_activacion=" + id_activacion +
	"&modelo=" + modelo +
	"&nro_vehiculo=" + nro_vehiculo +
	"&color=" + color +
	"&nro_chapa=" + nro_chapa +
	"&observacion=" + observacion;
	
;


	$.ajax({
		type:"POST",
		url:"Helpers/actualizarDatos_Activacion.php",
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


function confirmarLiberacionAC(id_activacion){
	alertify.confirm('Liberar Registro', 'Estas Seguro de Liberar el Registro?',
	 function(){ eliminarDatos(id_activacion) }
                , function(){ alertify.error('Operación Cancelada')});

}

function eliminarDatos(id_activacion){
	cadena = "id_activacion=" + id_activacion;

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