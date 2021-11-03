<?php 

require_once("Config/config.php");
require_once("Helpers/helpers.php");

$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';

//echo $url;

 $arrUrl = explode("/", $url);
 //print_r($arrUrl);
 $controller = $arrUrl[0];
 $metodo = $arrUrl[0];
 $params = "";
 if (!empty($arrUrl[1])) {
 	if ($arrUrl[1] != "") {
 		$metodo = $arrUrl[1];
 	}
 }

//echo "controlador:".$controller.'- metodo:'.$metodo;

 if (!empty($arrUrl[2])) {
 	if ($arrUrl[2] != "") {
 		for ($i = 2; $i < count($arrUrl); $i++) {
 			$params .= $arrUrl[$i].',';
 		}


 		$params = trim($params,',');
 	}
 }

 /*echo"<br>";
 echo "controlador:".$controller;
 echo "<br>";
 echo "metodo:".$metodo;
 echo "<br>";
 echo "parametros:".$params;*/

require_once("Librerias/Core/autoLoad.php");
require_once("Librerias/Core/Load.php");



 ?>
