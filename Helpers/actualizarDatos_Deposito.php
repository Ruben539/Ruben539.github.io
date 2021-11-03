<?php

require_once "../Modelos/conexion.php";
	$conection = conexion();

	$id_deposito=$_POST['id_deposito'];
	$n=$_POST['modelo'];
	$a=$_POST['nro_vehiculo'];
	$c=$_POST['color'];
	$t=$_POST['pieza'];
	$f=$_POST['falla_detectada'];
	$o=$_POST['origen'];
	$u=$_POST['usuario'];

	$sql = "UPDATE deposito set modelo = '$n',
                                 nro_vehiculo ='$a',
                                 color = '$c',
                                 pieza = '$t',
                                 falla_detectada = '$f',
                                 origen = '$o',
                                 usuario = '$u'
                WHERE id_deposito = '$id_deposito'";
    echo $resultado = mysqli_query($conection,$sql);

 ?>