<?php 

    class CuatroRuedas extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function CuatroRuedas(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 16;
        $data['page_tage'] = "Registro de Insumo por Camión ";
        $data['page_name'] = "Registro de Insumo por Camión ";
        $data['page_title'] = "Registro de Insumo por Camión <small>- División Industrial</small>";
        
        $this->views->getView($this,"cuatroRuedas",$data);
        }

    }
 ?>