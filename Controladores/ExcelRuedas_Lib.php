<?php 

    class excelRuedas_Lib extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function ExcelRuedas_Lib(){
       //echo "Mensaje desde el Controlador";
        $this->views->getView($this,"excelRuedas_Lib");
        }


    }
 ?>