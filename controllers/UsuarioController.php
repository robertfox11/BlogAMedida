<?php
require_once 'models/Usuario.php';
class UsuarioController {
    public function index(){
        // echo "estoy en el index";
        echo "Controlador Usuarios, Acción index";
    }
    public function register(){
        //Va esta guardado 
        require 'views/user/register.php';
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
                // $usuario->setPassword($password);
                // var_dump(($usuario));
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
        // header("Location: /index.php",TRUE,301);
        header("Location:".URL."usuario/register");

    }
    public function login(){
        #comprobar si existe el usuario
        if (isset($_POST)) {
            # Identificar el usuario
            $usuario = new Usuario();
            $identity =$usuario->login($_POST['email']);
            //mantener usuario identificado
            if($identity && is_object($identity)){
				$_SESSION['identity'] = $identity;
				//identificacion de administrador
				if($identity->rol == 'admin'){
					$_SESSION['admin'] = true;
				}
			}else{
				$_SESSION['error_login'] = 'Identificación fallida !!';
            }
            // var_dump(header("Location:".URL."index"));
            // die();
        }
        header("Location:".URL);
    }
    //logout
    public function logout(){
        //comprobaremos si existe
        if (isset($_SESSION['identity'])) {
            unset($_SESSION['identity']);
        }
        //administrardor
        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }
        header("Location:".URL);
    }
}
?>