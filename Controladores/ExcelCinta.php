<?php 

    class ExcelCinta extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function ExcelCinta(){
       //echo "Mensaje desde el Controlador";
        $this->views->getView($this,"excelCinta");
        }


    }
 ?>