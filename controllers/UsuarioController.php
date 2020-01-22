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
            // $password = isset($_POST['password']) ? $_POST['password'] : false;

            if ($name && $lastname && $email) {
                $usuario = new Usuario();
                $usuario->setName($name);
                $usuario->setLastname($lastname);
                $usuario->setEmail($email);
                // $usuario->setPassword($password);
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
        header("Location:".URL);
    }
    public function login(){
        #comprobar si existe el usuario
       
        if (isset($_POST)) {
            # Identificar el usuario
            $usuario = new Usuario();
            
            // $usuario->setName($_POST['name']);
            $identity =$usuario->login($_POST['email']);
            var_dump($identity);

            //mantener usuario identificado
            if($identity && is_object($identity)){
				$_SESSION['identity'] = $identity;
				//identificacion de administrador
				// if($identity->rol == 'admin'){
				// 	$_SESSION['admin'] = true;
				// }
				
			}else{
				$_SESSION['error_login'] = 'Identificación fallida !!';
			}
            die();
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