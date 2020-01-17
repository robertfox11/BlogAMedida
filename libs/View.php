<?php
// Es una clase Base
class View{
    function __construct()
    {   
            // echo "<p>Vista base</p>";
    }
    //vamos a mostrar la vista que necesitamos cargar con el paranmetro nombre
    function render($nombre){
        require 'views/' . $nombre . '.php'; 
    }
}

?>