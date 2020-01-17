<?php
// Es una clase Base
class Model{
    function __construct()
    {
        //llamos la conexion de databases
        $this->db = new Database();  
    }
    
}

?>