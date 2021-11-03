<?php 

    class Personas extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Personas(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 2;
        $data['page_tage'] = "Registro de Usuarios ";
        $data['page_name'] = "Registro de Usuarios ";
        $data['page_title'] = "Registro de Usuarios <small>- División Industrial</small>";
        
        $this->views->getView($this,"personas",$data);
        }

    }
 ?>