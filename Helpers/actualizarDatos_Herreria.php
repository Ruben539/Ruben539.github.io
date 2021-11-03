<?php

require_once "../Modelos/conexion.php";
	$conection = conexion();

	$id_herreria=$_POST['id_herreria'];
	$n=$_POST['modelo'];
	$a=$_POST['nro_vehiculo'];
	$c=$_POST['color'];
	$t=$_POST['pieza'];
	$f=$_POST['falla_detectada'];
	$u=$_POST['usuario'];

	$sql = "UPDATE herreria set modelo = '$n',
                                 nro_vehiculo ='$a',
                                 color = '$c',
                                 pieza = '$t',
                                 falla_detectada = '$f',
                                 usuario = '$u'
                WHERE id_herreria = '$id_herreria'";
    echo $resultado = mysqli_query($conection,$sql);

 ?>