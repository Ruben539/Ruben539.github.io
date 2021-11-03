<?php

require_once "../Modelos/conexion.php";
	$conection = conexion();

	$id_reclamo=$_POST['id_reclamo'];
	$n=$_POST['modelo'];
	$a=$_POST['nro_partida'];
	$t=$_POST['pieza'];
	$c=$_POST['cantidad'];
	$f=$_POST['observacion'];
	$u=$_POST['destino'];
	

	$sql = "UPDATE reclamos set modelo = '$n',
                                 nro_partida ='$a',
                                 pieza = '$t',
                                 cantidad = '$c',
                                 observacion = '$f',
                                 destino = '$u'
                                
                WHERE id_reclamo = '$id_reclamo'";
    echo $resultado = mysqli_query($conection,$sql);

 ?>