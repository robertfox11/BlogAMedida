<?php
require_once 'controllers/Falla.php';
class App {
   public function __construct()
   {
    //    echo  "<h1>Hola Mundo</h1>";
//vamos a colocar cuando ingresemos que identifico que no hay un controlador
       //queremos obtener la url del constructo
       $url = isset($_GET['url'])? $_GET['url']: null;
       //eliminamos aquellos que no necesitamos 
       $url = rtrim($url, '/');
       //dividir parametros que estamos ingresando
       $url = explode('/', $url);

       //vamos a validar  si esta vacio  cargando el controlador main
       if (empty($url[0])) {
        $archivoController ='controllers/main.php';
        require_once $archivoController;
        $controller = new Main();
        $controller->loadModel('main');
        $controller->render();
        return false;
       }

       //Creamos una variable para coger la posicion 0
       $archivoController = 'controllers/' . $url[0] . '.php';
       //buscamos la posicion url el nomrbe del controlador buscamos la ruta terminado en Main.php
       //Hay que validar si el archivo existe
       if(file_exists($archivoController)){
        require_once $archivoController;
        //inicializa controlador
        $controller = new $url[0];
        $controller->loadModel($url[0]);
        //Hasta ahora llamando a metodos

        if(isset($url[1])){
            //el texto que hay aqui lo transforma por metodo del enrutamiento con main que encuentra el metodo de main
            $controller->{$url[1]}();
        }else{
            $controller->render();
        }
       }else{
           //tenemos que tener un controllador que maneje los errores
           
           $controller = new Falla();
      }
       

   }
}