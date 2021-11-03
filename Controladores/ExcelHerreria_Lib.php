<?php 

    class ExcelHerreria_Lib extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function ExcelHerreria_Lib(){
       //echo "Mensaje desde el Controlador";
        $this->views->getView($this,"excelHerreria_Lib");
        }


    }
 ?>