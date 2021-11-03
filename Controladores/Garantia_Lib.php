<?php 

    class Garantia_Lib extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Garantia_Lib(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 25;
        $data['page_tage'] = "Pedidos de Garantia ";
        $data['page_name'] = "Pedidos de Garantia ";
        $data['page_title'] = "Pedidos de Garantia <small>- División Industrial</small>";
        
        $this->views->getView($this,"garantia_Lib",$data);
        }

    }
 ?>