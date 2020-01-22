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
        
        // if (isset($_POST)) {
        //     var_dump($_POST);
        // }
        // if (isset($_POST)) {
        //         $usuario = new Usuario();
        //         $usuario->setName($_POST['name']);
        //         $usuario->setLastname($_POST['lastname']);
        //         $usuario->setEmail($_POST['lastname']);
        // $name = $_POST['name'];
        // $lastname = $_POST['lastname'];
        // $email = $_POST['email'];
        // if($this->Usuario->save(['name' => $name, 'lastname' => $lastname, 'email' => $email])){
        //     $mensaje = "Nuevo alumno creado";
        // }else{
        //     $mensaje ="Matricula ya existe";
        // }
        // $this->view->mensaje = $mensaje;
        // $this->register();
 
        if (isset($_POST)) {
            $usuario = new Usuario();
            $usuario->setName($_POST['name']);
            $usuario->setLastname($_POST['lastname']);
            $usuario->setEmail($_POST['email']);
            var_dump(($usuario));
            $save =$usuario->save();
            if ($save) {
                $_SESSION['register'] ="registro Completado";
            }else{
                $_SESSION['register']="failed";
            }
            // var_dump(($usuario));
        }else{
            $_SESSION['ragister'] = "failed";
            //si llega fallo
        }
        header("location:".URL.'usuario/registro');
    }
}
?>