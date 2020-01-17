<?php
    class Main extends Controller {
        function __construct()
        {   
            //con esto hacemos una llamada al controller.php de lib
                parent::__construct();
                //Tenemos que renderizar una vista especifica
                // $this->view->render('main/index');
                // echo "<p>Hola Main Controller de la carpeta controllers</p>";
        }
        function render(){
            $this->view->render('main/index');
    
        }
        function saludo(){
            echo "<p>Saludos de controller</p>";
        }
    }
?>