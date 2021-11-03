<?php 

    class ExcelCinta_Lib extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function ExcelCinta_Lib(){
       //echo "Mensaje desde el Controlador";
        $this->views->getView($this,"excelCinta_Lib");
        }


    }
 ?>