<?php 

    class ExcelProbado_Lib extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function ExcelProbado_Lib(){
       //echo "Mensaje desde el Controlador";
        $this->views->getView($this,"excelProbado_Lib");
        }


    }
 ?>