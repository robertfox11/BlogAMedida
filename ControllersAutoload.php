<?php
//auto load cargara los controladores
    function ControllersAutoload ($classname){
        include_once 'controllers/'.$classname.'.php';
    }

    spl_autoload_register('autoload');
?>