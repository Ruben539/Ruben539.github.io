<?php 

    class Login extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function login(){
       //echo "Mensaje desde el Controlador";
        $data['page_tage'] = "Acceso División Industrial";
        $data['page_title'] = "Acceso";
        $data['page_name'] = "Acceso";
        $data['page_function_js'] = "function_login.js";
        $this->views->getView($this,"login",$data);
        }


    }
 ?>