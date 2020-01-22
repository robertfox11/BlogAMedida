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
            //condicion si en caso el nombre o variable existe validando
            $name = isset($_POST['name']) ? $_POST['name'] : false;
            $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;

            if ($name && $lastname && $email) {
               
                $usuario = new Usuario();
                $usuario->setName($name);
                $usuario->setLastname($lastname);
                $usuario->setEmail($email);
                var_dump(($usuario));
                $save =$usuario->save();
                if ($save) {
                    $_SESSION['register'] ="complete";
                }else{
                    $_SESSION['register']="failed";
                }
            }else{
                $_SESSION['register']="failed";
            }
            // var_dump(($usuario));
        }else{
            $_SESSION['ragister'] = "failed";
            //si llega fallo
        }
        // header("Location:".URL.'usuario/register');
    }
}
