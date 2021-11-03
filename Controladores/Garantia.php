<?php 

    class Garantia extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Garantia(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 24;
        $data['page_tage'] = "Pedidos de Garantia ";
        $data['page_name'] = "Pedidos de Garantia ";
        $data['page_title'] = "Pedidos de Garantia <small>- División Industrial</small>";
        
        $this->views->getView($this,"garantia",$data);
        }

    }
 ?>