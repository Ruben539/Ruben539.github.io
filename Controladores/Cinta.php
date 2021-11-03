<?php 

    class Cinta extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Cinta(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 10;
        $data['page_tage'] = "Sector Cinta ";
        $data['page_name'] = "Motos Pendientes  Sector Cinta";
        $data['page_title'] = "Cinta de Ensamble División Industrial";
        
        $this->views->getView($this,"cinta",$data);
        }

        

    }
 ?>