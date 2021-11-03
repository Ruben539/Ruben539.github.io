function agregarDatoR(modelo,nro_vehiculo,color,pieza,falla_detectada,sector,estado,usuario){

	cadena = "modelo=" + modelo +
	"&nro_vehiculo=" + nro_vehiculo +
	"&color=" + color +
	"&pieza=" + pieza +
	"&falla_detectada=" + falla_detectada +
	"&sector=" + sector +
	"&estado=" + estado +
	"&usuario=" + usuario;
	

	$.ajax({
		type:"POST",
		url:"Helpers/grabarRuedas.php",
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

function editarDatosR(datos){
	d = datos.split('||');

	$('#id_ruedas').val(d[0]);
	$('#modelou').val(d[2]);
	$('#nro_vehiculou').val(d[3]);
	$('#coloru').val(d[4]);
	$('#piezau').val(d[5]);
	$('#falla_detectadau').val(d[6]);

}



function actualizarDatoR(){

	id_ruedas=$('#id_ruedas').val();
	modelo=$('#modelou').val();
	nro_vehiculo=$('#nro_vehiculou').val();
	color=$('#coloru').val();
	pieza=$('#piezau').val();
	falla_detectada=$('#falla_detectadau').val();
	usuario=$('#usuariou').val();


	cadena = "id_ruedas=" + id_ruedas +
	"&modelo=" + modelo +
	"&nro_vehiculo=" + nro_vehiculo +
	"&color=" + color +
	"&pieza=" + pieza +
	"&falla_detectada=" + falla_detectada +
	"&usuario=" + usuario ;


	$.ajax({
		type:"POST",
		url:"Helpers/actualizarDatos_Ruedas.php",
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


function confirmarLiberacionR(id_ruedas){
	alertify.confirm('<div class="bodyModal">'+
		'<h1 class="text-center"><i class="fas fa-file-alt"></i> Liberar Registro : '+id_ruedas+'</h1>'+
		'<hr>'+
		'<div class="input-group text-center">'+
		'<h5 class="text-center"><i class="fas fa-dot-circle"></i> Ruedas - División Industrial</h5>'+
		'</div>'+
		'<br>'+
		'</div>',
	 function(){ eliminarDatos(id_ruedas) }
                , function(){ alertify.error('Operación Cancelada')});

}

function eliminarDatos(id_ruedas,fecha_fin,estado,usuario){
	cadena = "id_ruedas=" + id_ruedas +
			"&fecha_fin=" + fecha_fin +
			"&estado=" + estado +
			"&usuario=" + usuario;

	$.ajax({
		type:"POST",
		url:"Helpers/liberarDatos_Ruedas.php",
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