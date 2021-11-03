<?php 

    class excelPintura_Lib extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function ExcelPintura_Lib(){
       //echo "Mensaje desde el Controlador";
        $this->views->getView($this,"excelPintura_Lib");
        }


    }
 ?>