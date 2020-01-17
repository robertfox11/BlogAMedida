<?php
// Es una clase Base
class Controller{
    function __construct()
    {
        //con esto hacemos una llamada al controller.php de lib
        // echo "<p>Controlador Base la carpeta lib</p>";
        //es una vista asociada a ella con un modelo de datos
        $this->view = new View();   
    }
    //cargando el model 
    function loadModel($model){
        $url ='models/'.$model.'model.php';
        //validar
        if (file_exists($url)) {
            require $url;
            $modelName =$model.'Model';
            $this->model = new $modelName();
        }
    }
}

?>