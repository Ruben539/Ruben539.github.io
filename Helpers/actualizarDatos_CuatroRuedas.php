<?php

require_once "../Modelos/conexion.php";
	$conection = conexion();

	$id_camion=$_POST['id_camion'];
	$modelo=$_POST['modelo'];
	$nro_chasis=$_POST['nro_chasis'];
	$insumo_1=$_POST['insumo_1'];
	$cantidad_1=$_POST['cantidad_1'];
	$insumo_2=$_POST['insumo_2'];
	$cantidad_2=$_POST['cantidad_2'];
	$insumo_3=$_POST['insumo_3'];
	$cantidad_3=$_POST['cantidad_3'];
	$insumo_4=$_POST['insumo_4'];
	$cantidad_4=$_POST['cantidad_4'];
	$insumo_5=$_POST['insumo_5'];
	$cantidad_5=$_POST['cantidad_5'];
	$observacion=$_POST['observacion'];

	$sql = "UPDATE pintura_camiones set modelo = '$modelo',
                                 nro_chasis ='$nro_chasis',
                                 insumo_1 = '$insumo_1',
                                 cantidad_1 = '$cantidad_1',
                                 insumo_2 = '$insumo_2',
                                 cantidad_2= '$cantidad_2',
                                 insumo_3 = '$insumo_3',
                                 cantidad_3 = '$cantidad_3',
                                 insumo_4 = '$insumo_4',
                                 cantidad_4= '$cantidad_4',
                                 insumo_5 = '$insumo_5',
                                 cantidad_5= '$cantidad_5',
                                 observacion= '$observacion'
                WHERE id_camion = '$id_camion'";
    echo $resultado = mysqli_query($conection,$sql);

 ?>