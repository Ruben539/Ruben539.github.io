function agregarDatoDep(modelo,nro_vehiculo,color,pieza,falla_detectada,origen,sector,estado,usuario){

	cadena = "modelo=" + modelo +
	"&nro_vehiculo=" + nro_vehiculo +
	"&color=" + color +
	"&pieza=" + pieza +
	"&falla_detectada=" + falla_detectada +
	"&origen=" + origen +
	"&sector=" + sector +
	"&estado=" + estado +
	"&usuario=" + usuario;
	
	

	$.ajax({
		type:"POST",
		url:"Helpers/grabarDeposito.php",
		data:cadena,
		success: function(r){
			if(r == 1){
				alertify.success('Agregado con Exito <i class="far fa-thumbs-up"></i> ');
				location.reload();

			}else{
				alertify.error('Error al Grabar <i class="fas fa-exclamation-circle"></i>');
			}
		}
	});
}

function editarDatosDep(datos){
	d = datos.split('||');

	$('#id_deposito').val(d[0]);
	$('#modelou').val(d[2]);
	$('#nro_vehiculou').val(d[3]);
	$('#coloru').val(d[4]);
	$('#piezau').val(d[5]);
	$('#falla_detectadau').val(d[6]);
	$('#origenu').val(d[8]);

}


function actualizarDatoDep(){

	id_deposito=$('#id_deposito').val();
	modelo=$('#modelou').val();
	nro_vehiculo=$('#nro_vehiculou').val();
	color=$('#coloru').val();
	pieza=$('#piezau').val();
	falla_detectada=$('#falla_detectadau').val();
	origen=$('#origenu').val();
	usuario=$('#usuariou').val();
	


	cadena = "id_deposito=" + id_deposito +
	"&modelo=" + modelo +
	"&nro_vehiculo=" + nro_vehiculo +
	"&color=" + color +
	"&pieza=" + pieza +
	"&falla_detectada=" + falla_detectada +
	"&origen=" + origen +
	"&usuario=" + usuario;
	


	$.ajax({
		type:"POST",
		url:"Helpers/actualizarDatos_Deposito.php",
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


function confirmarLiberacionDep(id_deposito){
	alertify.confirm('<div class="bodyModal">'+
		'<h1 class="text-center"><i class="fas fa-file-alt"></i> Liberar Registro : '+id_deposito+'</h1>'+
		'<hr>'+
		'<div class="input-group text-center">'+
		'<h5 class="text-center"><i class="fas fa-paint-brush"></i> Taller de Levante - División Industrial</h5>'+
		'</div>'+
		'<br>'+
		'</div>',
	 function(){ eliminarDatos(id_deposito) }
                , function(){ alertify.error('Operación Cancelada <i class="fas fa-exclamation-circle"></i>')});

}

function eliminarDatos(id_deposito,fecha_fin,usuario){
	cadena = "id_deposito=" + id_deposito +
			"&fecha_fin=" + fecha_fin +
			"&usuario=" + usuario;

	$.ajax({
		type:"POST",
		url:"Helpers/liberarDatos_Deposito.php",
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