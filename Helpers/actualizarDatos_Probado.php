<?php

require_once "../Modelos/conexion.php";
	$conection = conexion();

	$id_probado=$_POST['id_probado'];
	$modelo=$_POST['modelo'];
	$nro_vehiculo=$_POST['nro_vehiculo'];
	$color=$_POST['color'];
	$pieza=$_POST['pieza'];
	$falla_detectada=$_POST['falla_detectada'];
	$usuario=$_POST['usuario'];

	$sql = "UPDATE probado set  modelo = '$modelo',
                                nro_vehiculo ='$nro_vehiculo',
                                color = '$color',
                                pieza = '$pieza',
                                falla_detectada = '$falla_detectada',
                                usuario = '$usuario'
                WHERE id_probado = '$id_probado'";
    echo $resultado = mysqli_query($conection,$sql);

 ?>