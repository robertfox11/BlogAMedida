<?php
class Model{
    public $db;
    function __construct()
    
    {
        
        //llamos la conexion de databases
        $this->db = new Database();  
    }
    
}
?>