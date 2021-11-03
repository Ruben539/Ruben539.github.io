<?php 

    class Deposito extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Deposito(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 14;
        $data['page_tage'] = "Motos Pendientes ";
        $data['page_name'] = "Motos Pendientes ";
        $data['page_title'] = "Motos Pendientes <small>- División Industrial</small>";
        
        $this->views->getView($this,"deposito",$data);
        }

    }
 ?>