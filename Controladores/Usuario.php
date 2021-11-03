<?php 

    class Usuario extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Usuario(){
       //echo "Mensaje desde el Controlador";
        $data['page_tage'] = " Usuario";
        $data['page_name'] = "usuario";
        $data['page_title'] = "Usuario  División Industrial";
         $data['page_function_js'] = "function_usuario.js";
        $this->views->getView($this,"usuario",$data);
        }


    }
 ?>