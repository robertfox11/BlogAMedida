<?php
//auto load cargara los controladores
    function ControllersAutoload($className){
        include 'controllers/'. $className. 'php';
    }
    spl_autoload_register('ControllersAutoload')
?>