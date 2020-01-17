<?php
class Falla extends Controller{
    function __construct()
    {
        parent::__construct();
        //vamos a transmitir un mensaje a falla/index forma dinamica
        $this->view->mensaje ="Error generico al cargar el recurso";
        //Tenemos que renderizar una vista especifica
        $this->view->render('falla/index');
        // echo "<p>Error al cargar recurso</p>";
    }
}
?>