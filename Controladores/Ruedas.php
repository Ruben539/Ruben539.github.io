<?php 

    class Ruedas extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Ruedas(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 8;
        $data['page_tage'] = "Motos Pendientes ";
        $data['page_name'] = "Motos Pendientes ";
        $data['page_title'] = "Motos Pendientes <small>- División Industrial</small>";
        
        $this->views->getView($this,"ruedas",$data);
        }

    }
 ?>