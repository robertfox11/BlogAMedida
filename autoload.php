<?php
    function autoload ($classname){
        include_once 'controllers/'.$classname.'.php';
    }

    spl_autoload_register('autoload');
?>