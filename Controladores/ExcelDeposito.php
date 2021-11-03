<?php 

    class ExcelDeposito extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function ExcelDeposito(){
       //echo "Mensaje desde el Controlador";
        $this->views->getView($this,"excelDeposito");
        }


    }
 ?>