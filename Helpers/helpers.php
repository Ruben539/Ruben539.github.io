<?php 

function base_url(){
	return BASE_URL;
}

//Funcion para retornar la url de Asses
function media(){
	return BASE_URL."/Asses";
}


//Funcion para llamar a los archivos de DASHBOARD
function headerAdmin($data=""){
	$view_header = "Modelos/header_admin.php";
	require_once("$view_header");
}

function footerAdmin($data=""){
	$view_footer = "Modelos/footer_admin.php";
	require_once("$view_footer");
}

//Funcion para depurar un array o contenido de un objeto, Muestra una informacion Formateada.
function dep($data){
	$format = print_r("<pre>");
	$format = print_r($data);
	$format = print_r("</pre>");
	return $format;
}

//Funcion que sirve para mostrar los modals de los formularios
function getModals(string $nameModal, $data){
	$viewModal = "Vistas/{$nameModal}.php";
	require_once("$viewModal");
}

//Funcion para limpiar cadenas de texto,el exceso de espacios entre palabras.
function srtClean($strCadena){
	$string = preg_replace(['/\s*/','/*\s|\s$'],[' ',''],$strCadena);
	$string = trim($string);
	$string = stripcslashes($string);
	$string = str_ireplace("<script>", "", $string);
	$string = str_ireplace("<script src>", "", $string);
	$string = str_ireplace("<script type>", "", $string);
	$string = str_ireplace("SELECT * FROM", "", $string);
	$string = str_ireplace("DELETE FROM", "", $string);
	$string = str_ireplace("INSERT INTO", "", $string);
	$string = str_ireplace("SELECT COUNT(*) FROM", "", $string);
	$string = str_ireplace("DROP TABLE", "", $string);
	$string = str_ireplace("OR '1'='1'", "", $string);
	$string = str_ireplace('OR "1"="1"', "", $string);
	$string = str_ireplace('OR ´1´=´1´',"", $string);
	$string = str_ireplace("IS NULL; ``", "", $string);
	$string = str_ireplace("IS NULL; ``", "", $string);
	$string = str_ireplace("LIKE '", "", $string);
	$string = str_ireplace('LIKE "', "", $string);
	$string = str_ireplace("LIKE ´", "", $string);
	$string = str_ireplace("OR 'a'= 'a", "", $string);
	$string = str_ireplace('OR "a"="a', "", $string);
	$string = str_ireplace("OR ´a´=´a", "", $string);
	$string = str_ireplace("OR ´a´=´a", "", $string);
	$string = str_ireplace("--", "", $string);
	$string = str_ireplace("^", "", $string);
	$string = str_ireplace("[", "", $string);
	$string = str_ireplace("]", "", $string);
	$string = str_ireplace("==", "", $string);
	return $string;

}

//Funcion para generar Paswoord de Usuarios.
function passGenerator($length = 10){
	$pass = "";
	$longitudPass = $length;
	$cadena = "ABCDEFGAHJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	$longitudCadena = strlen($cadena);

	for ($i=1 ; $i <=$longitudPass; $i++) {
		$pos = rand(0,$longitudCadena-1);
		$pass .= substr($cadena, $pos, 1);
	}
	return $pass;
}

//Funcion para generar un Tocken de Seguridad.
function token(){
	$r1 = bin2hex(random_bytes(10));
	$r2 = bin2hex(random_bytes(10));
	$r3 = bin2hex(random_bytes(10));
	$r4 = bin2hex(random_bytes(10));
	$token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
	return $token;
}

//Funcion para generar Formatos Monetarios especificados en tu archivo Config.
function formatMoney($cantidad){
	$cantidad = number_format($cantidad,2,SPD,SPM);
	return $cantidad;
}	

//Funcion para generar Alertas
/*function sweet_alert($data){
	if ($data['Alerta']== "$modal") {
		$alerta = "
		<script>

		Swal.fire(
		'.$data['titulo'].',
		'.$data['texto'].',
		'.$data['tipo'].'
		);

		</script>";
	}elseif($data['Alerta']==""){
		$alerta = "
		<script>

		Swal.fire({
  title: '".$data['titulo']."',
  text: '".$data['texto']."',
  icon: '".$data['tipo']."',
  confirmButtonText: 'Aceptar'
}).then(() => {
  if () {
    location.reload();
    )
  }
});

		</script>";
	}
}

*/
?>