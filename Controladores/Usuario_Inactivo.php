<?php 

    class Usuario_Inactivo extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Usuario_Inactivo(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 27;
        $data['page_tage'] = "Usuarios Inactivos ";
        $data['page_name'] = "Usuarios Inactivos ";
        $data['page_title'] = "Usuarios Inactivos <small>- División Industrial</small>";
        
        $this->views->getView($this,"usuario_Inactivo",$data);
        }

    }
 ?>