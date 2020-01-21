<?php
require_once 'models/Usuario.php';
class UsuarioController {
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
 
        if (isset($_POST)) {
            $usuario = new Usuario();
            $usuario->setName($_POST['name']);
            $usuario->setLastname($_POST['lastname']);
            $usuario->setEmail($_POST['lastname']);
            $save =$usuario->save();
            if ($save) {
                echo "registro Completado";
            }else{
                echo'Registro fallido';
            }
            // var_dump(($usuario));
        }
    }
}
?>