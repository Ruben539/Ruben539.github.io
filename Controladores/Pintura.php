<?php 

    class Pintura extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Pintura(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 6;
        $data['page_tage'] = "Motos Pendientes ";
        $data['page_name'] = "Motos Pendientes ";
        $data['page_title'] = "Motos Pendientes <small>- División Industrial</small>";
        
        $this->views->getView($this,"pintura",$data);
        }

    }
 ?>