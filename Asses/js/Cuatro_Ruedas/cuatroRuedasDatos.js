function agregarDatoCR(modelo,nro_chasis,insumo_1,cantidad_1,insumo_2,cantidad_2,insumo_3,cantidad_3,insumo_4,cantidad_4,insumo_5,cantidad_5,observacion,usuario){

	cadena = "modelo=" + modelo +
	"&nro_chasis=" + nro_chasis +
	"&insumo_1=" + insumo_1 +
	"&cantidad_1=" + cantidad_1 +
	"&insumo_2=" + insumo_2 +
	"&cantidad_2=" + cantidad_2 +
	"&insumo_3=" + insumo_3 +
	"&cantidad_3=" + cantidad_3 +
	"&insumo_4=" + insumo_4 +
	"&cantidad_4=" + cantidad_4 +
	"&insumo_5=" + insumo_5 +
	"&cantidad_5=" + cantidad_5 +
	"&observacion=" + observacion +
	"&usuario=" + usuario;

	
	

	$.ajax({
		type:"POST",
		url:"Helpers/grabarcuatroRuedas.php",
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

function editarDatosCR(datos){
	d = datos.split('||');

	$('#id_camion').val(d[0]);
	$('#modelou').val(d[2]);
	$('#nro_chasisu').val(d[3]);
	$('#insumo_1u').val(d[4]);
	$('#cantidad_1u').val(d[5]);
	$('#insumo_2u').val(d[6]);
	$('#cantidad_2u').val(d[7]);
	$('#insumo_3u').val(d[8]);
	$('#cantidad_3u').val(d[9]);
	$('#insumo_4u').val(d[10]);
	$('#cantidad_4u').val(d[11]);
	$('#insumo_5u').val(d[12]);
	$('#cantidad_5u').val(d[13]);
	$('#observacionu').val(d[14]);

}

function verDatosPin(datos){
	d = datos.split('||');

	$('#id_camion').val(d[0]);
	$('#modelo').val(d[2]);
	$('#nro_chasis').val(d[3]);
	$('#insumo_1').val(d[4]);
	$('#cantidad_1').val(d[5]);
	$('#insumo_2').val(d[6]);
	$('#cantidad_2').val(d[7]);
	$('#insumo_3').val(d[8]);
	$('#cantidad_3').val(d[9]);
	$('#insumo_4').val(d[10]);
	$('#cantidad_4').val(d[11]);
	$('#insumo_5').val(d[12]);
	$('#cantidad_5').val(d[13]);
	$('#observacion').val(d[14]);

}

function actualizarDatoCR(){

	id_camion=$('#id_camion').val();
	modelo=$('#modelou').val();
	nro_chasis=$('#nro_chasisu').val();
	insumo_1=$('#insumo_1u').val();
	cantidad_1=$('#cantidad_1u').val();
	insumo_2=$('#insumo_2u').val();
	cantidad_2=$('#cantidad_2u').val();
	insumo_3=$('#insumo_3u').val();
	cantidad_3=$('#cantidad_3u').val();
	insumo_4=$('#insumo_4u').val();
	cantidad_4=$('#cantidad_4u').val();
	insumo_5=$('#insumo_5u').val();
	cantidad_5=$('#cantidad_5u').val();
	observacion=$('#observacionu').val();


	cadena = "modelo=" + modelo +
	"&nro_chasis=" + nro_chasis +
	"&insumo_1=" + insumo_1 +
	"&cantidad_1=" + cantidad_1 +
	"&insumo_2=" + insumo_2 +
	"&cantidad_2=" + cantidad_2 +
	"&insumo_3=" + insumo_3 +
	"&cantidad_3=" + cantidad_3 +
	"&insumo_4=" + insumo_4 +
	"&cantidad_4=" + cantidad_4 +
	"&insumo_5=" + insumo_5 +
	"&cantidad_5=" + cantidad_5 +
	"&observacion=" + observacion;


	$.ajax({
		type:"POST",
		url:"Helpers/actualizarDatos_CuatroRuedas.php",
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


function confirmarLiberacionCR(id_camion){
	alertify.confirm('Liberar Registro', 'Estas Seguro de Liberar el Registro?',
	 function(){ eliminarDatos(id_camion) }
                , function(){ alertify.error('Operación Cancelada')});

}

function eliminarDatos(id_camion){
	cadena = "id_camion=" + id_camion;

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