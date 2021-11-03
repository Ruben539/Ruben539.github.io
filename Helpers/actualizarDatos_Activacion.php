<?php

require_once "../Modelos/conexion.php";
	$conection = conexion();

	$id_activacion=$_POST['id_activacion'];
	$n=$_POST['modelo'];
	$a=$_POST['nro_vehiculo'];
	$c=$_POST['color'];
	$t=$_POST['nro_chapa'];
	$f=$_POST['observacion'];
	

	$sql = "UPDATE activaciones set modelo = '$n',
                                 nro_vehiculo ='$a',
                                 color = '$c',
                                 nro_chapa = '$t',
                                 observacion = '$f'
                                
                WHERE id_activacion = '$id_activacion'";
    echo $resultado = mysqli_query($conection,$sql);

 ?>