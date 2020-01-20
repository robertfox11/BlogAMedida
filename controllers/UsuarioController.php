<?php
class UsuarioController{
    public function index(){
        echo "estoy en el index";
        require_once 'views/layout/index.php';
    }
    public function register(){
        //Va esta guardado 
        require_once 'views/user/register.php';

    }
    public function saveUser(){
        //recoger datos
        if (isset($_POST)) {
            var_dump($_POST);
        }
    }
}
?>