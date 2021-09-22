<?php 

class Views {

	function getView($controller,$view,$data=""){
		$controller = get_class($controller);
		if ($controller == "Home") {
			$view = "Vistas/".$view.".php";
		}else {
			$view = "Vistas/".$controller."/".$view.".php";
		}
		require_once($view);
	}
}


 ?>