<?php 

	function base_url(){
		return BASE_URL;
	}

//Funcion para depurar un array o contenido de un objeto.
	function dep($data){
		$format = print_r("<pre>");
		$format = print_r($data);
		$format = print_r("</pre>");
		return $format;
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
	function passGenerator(){
		$pass = "";
		$longitudPass = $length;
		$cadena = "ABCDEFGAHJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$longitudCadena = strlen($cadena);

		for ($i=1 ; $i <=$longitudPass; $i++) {
			$pos = rand(0,$longitudCadena-1);
			$pass = substr($cadena, $pos, 1);
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

//Funcion para generar Formatos Monetarios.
	function formatMoney($cantidad){
		$cantidad = number_format($cantidad,2,SPD,SPM);
		return $cantidad;
	}	

 ?>