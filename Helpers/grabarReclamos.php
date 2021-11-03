<?php 
require_once "../Modelos/conexion.php";
  $conection = conexion();

if (!empty($_POST)) {
	$alert = '';
	//print_r($_POST);
	print_r($_FILES);
	exit;
	
	if (empty($_POST['proveedor']) ||empty($_POST['descripcion'])  || ($_POST['existencia'] <= 0)) {

		

	}else{
		
		$modelo      = $_POST['modelo'];
    $nro_partida = $_POST['nro_partida'];
		$descripcion = $_POST['descripcion'];
    $proveedor   = $_POST['proveedor'];
		$existencia  = $_POST['existencia'];
		$usuario     = $_POST['usuario'];

		$foto = $_FILES['foto'] ['name'];
		$nombrefoto = $_FILES['foto'] ['name'];
		$tipo = $_FILES['foto'] ['type'] ;
		$url_temp = $_FILES['foto'] ['tmp_name'];
		

		$imgProducto = 'img_producto.jpg';

		if ($nombrefoto != '') {

			$destino ='Asses/images/uploads/';

			$img_nombre   = 'image_'.md5(date('d-m Y H-m-s'));#Estamos encriptando la fecha y hora para el nombre de la foto 
			$imgProducto  = $img_nombre.'.jpg';
			$scr 	  	  =  $destino.$imgProducto;		
			
		}

		$query_insert = mysqli_query($conection,"INSERT INTO producto(modelo,nro_partida,descripcion,proveedor,existencia,usuario,foto)
			VALUES('$modelo','$nro_partida','$descripcion','$proveedor','$existencia','$usuario','$imgProducto')");

		if ($query_insert ) {
			if ($nombrefoto != '') {
				move_uploaded_file($url_temp, $scr);
			}
			$alert = '<p class = "msg_save">Producto Guardado Correctamente</p>';

		}else{
			$alert = '<p class = "msg_error">Error al Guardar el Producto</p>';
		}
	}

}


?>

