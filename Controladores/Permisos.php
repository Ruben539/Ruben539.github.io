<?php 

    class Permisos extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function permisos(){
       //echo "Mensaje desde el Controlador";
        $data['page_tage'] = " Permisos de Usuario";
        $data['page_name'] = "Permisos de Usuario";
        $data['page_title'] = "Permisos de Usuario <small>- División Industrial</small>";
        
        $this->views->getView($this,"permisos",$data);
        }


    }
 ?>