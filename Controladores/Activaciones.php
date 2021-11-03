<?php 

    class Activaciones extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Activaciones(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 17;
        $data['page_tage'] = "Motos Activadas ";
        $data['page_name'] = "Motos Activadas ";
        $data['page_title'] = "Motos Activadas <small>- División Industrial</small>";
        
        $this->views->getView($this,"activaciones",$data);
        }

    }
 ?>