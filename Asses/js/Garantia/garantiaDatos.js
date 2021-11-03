function agregarDatoGa(solicitante,modelo,nro_partida,pieza,cantidad,destino,observacion){

	cadena = "solicitante=" + solicitante +
	"&modelo=" + modelo +
	"&nro_partida=" + nro_partida +
	"&pieza=" + pieza +
	"&cantidad=" + cantidad +
	"&destino=" + destino +
	"&observacion=" + observacion;
	
	
	

	$.ajax({
		type:"POST",
		url:"Helpers/grabarGarantia.php",
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

function editarDatosGa(datos){
	d = datos.split('||');

	$('#id_reclamo').val(d[0]);
	$('#modelou').val(d[3]);
	$('#nro_partidau').val(d[4]);
	$('#piezau').val(d[5]);
	$('#cantidadu').val(d[6]);
	$('#destinou').val(d[7]);
	$('#observacionu').val(d[8]);
	

}

function actualizarDatoGa(){

	id_reclamo=$('#id_reclamo').val();
	modelo=$('#modelou').val();
	nro_partida=$('#nro_partidau').val();
	pieza=$('#piezau').val();
	cantidad=$('#cantidadu').val();
	destino=$('#destinou').val();
	observacion=$('#observacionu').val();
	


	cadena = "id_reclamo=" + id_reclamo +
	"&modelo=" + modelo +
	"&nro_partida=" + nro_partida +
	"&pieza=" + pieza +
	"&cantidad=" + cantidad +
	"&destino=" + destino +
	"&observacion=" + observacion;
	
;


	$.ajax({
		type:"POST",
		url:"Helpers/actualizarDatos_Garantia.php",
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


function confirmarLiberacionGa(id_reclamo){
	alertify.confirm('<div class="bodyModal">'+
		'<h1 class="text-center"><i class="fas fa-file-alt"></i> Aprobar Pedido : '+id_reclamo+'</h1>'+
		'<hr>'+
		'<div class="input-group text-center">'+
		'<h5 class="text-center"><i class="fas fa-paint-brush"></i> Pedidos de Garantia - División Industrial</h5>'+
		'</div>'+
		'<br>'+
		'</div>',
	 function(){ eliminarDatos(id_reclamo) }
                , function(){ alertify.error('Operación Cancelada <i class="fas fa-exclamation-circle"></i>')});

}

function eliminarDatos(id_reclamo,fecha_fin,usuario){
	cadena = "id_reclamo=" + id_reclamo;

	$.ajax({
		type:"POST",
		url:"Helpers/liberarDatos_Garantia.php",
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