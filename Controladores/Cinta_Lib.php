<?php 

    class Cinta_Lib extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Cinta_Lib(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 11;
        $data['page_tage'] = "Motos Liberadas ";
        $data['page_name'] = "Motos Liberadas ";
        $data['page_title'] = "Motos Liberadas <small>- División Industrial</small>";
        
        $this->views->getView($this,"cinta_lib",$data);
        }

    }
 ?>