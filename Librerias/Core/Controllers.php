<?php 

  class Controllers extends Conection {

  	public function __construct(){
      $this->views = new Views();
      $this->loadModel();
  	}

  	public function loadModel(){
  		$model = get_class($this)."Model";
      $routClass = "Modelos/".$model.".php";
      if(file_exists($routClass)){
        require_once($routClass);
        $this->model = new $model();
      }
  	}
}


 ?>