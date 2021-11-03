<?php 

    class ExcelDeposito_Lib extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function ExcelDeposito_Lib(){
       //echo "Mensaje desde el Controlador";
        $this->views->getView($this,"excelDeposito_Lib");
        }


    }
 ?>