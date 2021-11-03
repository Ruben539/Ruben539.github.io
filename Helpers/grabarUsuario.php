<?php
	session_start();
if ($_SESSION['rol'] != 1) {
	header('location: home');
}


require_once "../Modelos/conexion.php";
	$conection = conexion();

if (!empty($_POST)) {
	$alert = '';

	if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['password']) ||empty($_POST['rol'])) {

		$alert = '<p class = "msg_error">Debe llenar Todos los Campos</p>';

	}else{


		$nombre = $_POST['nombre'];
		$correo  = $_POST['correo'];
		$usuario   = $_POST['usuario'];
		$pass   = md5($_POST['password']);
		$rol    = $_POST['rol'];
		$puesto    = $_POST['puesto'];



		$query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario = '$usuario' or correo = '$correo'");

		$resultado = mysqli_fetch_array($query);

		if ($resultado > 0) {
			$alert = '<p class = "msg_error">El correo o Usuario ya existe</p>';
		}else{

			$query_insert = mysqli_query($conection,"INSERT INTO usuario(nombre,correo,usuario,password,rol,puesto)
				VALUES('$nombre','$correo','$usuario','$pass','$rol','$puesto')");
			if ($query_insert ) {
				

			}else{
				
			}
		}
	}

}



?>