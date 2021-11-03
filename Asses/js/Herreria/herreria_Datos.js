function agregarDatos(modelo,nro_vehiculo,color,pieza,falla_detectada,sector,estado,usuario){

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
		url:"Helpers/grabarHerreria.php",
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

function editarDatos(datos){
	d = datos.split('||');

	$('#id_herreria').val(d[0]);
	$('#modelou').val(d[2]);
	$('#nro_vehiculou').val(d[3]);
	$('#coloru').val(d[4]);
	$('#piezau').val(d[5]);
	$('#falla_detectadau').val(d[6]);
	

}

function actualizarDatos(){

	id_herreria=$('#id_herreria').val();
	modelo=$('#modelou').val();
	nro_vehiculo=$('#nro_vehiculou').val();
	color=$('#coloru').val();
	pieza=$('#piezau').val();
	falla_detectada=$('#falla_detectadau').val();
	usuario=$('#usuariou').val();


	cadena = "id_herreria=" + id_herreria +
	"&modelo=" + modelo +
	"&nro_vehiculo=" + nro_vehiculo +
	"&color=" + color +
	"&pieza=" + pieza +
	"&falla_detectada=" + falla_detectada +
	"&usuario=" + usuario ;


	$.ajax({
		type:"POST",
		url:"Helpers/actualizarDatos_Herreria.php",
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

function mostrar_fecha(){
	let fecha = new Date();

	let day   = fecha.getDate();
	let month = fecha.getMonth() + 1;
	let year  = fecha.getFullYear();
	
	let formato = `${day}-${month}-${year}`;
	console.log(formato);
}

function confHerreriaLib(id_herreria){
	alertify.confirm('<div class="bodyModal">'+
		'<h1 class="text-center"><i class="fas fa-file-alt"></i> Liberar Registro : '+id_herreria+'</h1>'+
		'<hr>'+
		'<div class="input-group text-center">'+
		'<h5 class="text-center"><i class="fas fa-paint-brush"></i> Herreria - División Industrial</h5>'+
		'</div>'+
		'<br>'+
		'</div>',
	 function(){ eliminarDatos(id_herreria) }
                , function(){ alertify.error('Operación Cancelada')});

}

function eliminarDatos(id_herreria,fecha_fin,usuario){
	cadena = "id_herreria=" + id_herreria +
			 "&fecha_fin=" + fecha_fin +
			 "&usuario=" + usuario;

	$.ajax({
		type:"POST",
		url:"Helpers/eliminarDatos_Herreria.php",
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
