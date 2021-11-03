<?php 

    class Usuario_Mod extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Usuario_Mod(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 28;
        $data['page_tage'] = "Actualizar Usuarios  ";
        $data['page_name'] = "Actualizar Usuarios  ";
        $data['page_title'] = "Actualizar Usuarios  <small>- División Industrial</small>";
        
        $this->views->getView($this,"usuario_mod",$data);
        }

    }
 ?>