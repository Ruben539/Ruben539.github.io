<?php 

class Views {

	function getView($controller,$view,$data=""){
		$controller = get_class($controller);
		if ($controller == "Home") {
			$view = "Modelos/".$view.".php";
		}else {
			$view = "Modelos/".$controller."/".$view.".php";
		}
		require_once($view);
	}
}


 ?>