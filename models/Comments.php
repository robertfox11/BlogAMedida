<?php
class Comments {
    
    private $id;
    private $usuario_id;
    private $categoria_id;
    private $titulo;
    private $descripcion;
    private $fecha;
    private $db;
    public function __construct() {
        $this->db = Database::connect();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public function getUsuario_id()
    {
        return $this->usuario_id;
    }
    public function setUsuario_id($usuario_id)
    {
        $this->usuario_id = $this->db->real_escape_string($usuario_id);
        // return $this;
    }
    public function getCategoria_id()
    {
        return $this->categoria_id;
    }
    public function setCategoria_id($categoria_id)
    {
        $this->categoria_id = $this->db->real_escape_string($categoria_id);
        return $this;
    }
    public function getTitulo()
    {
        return $this->titulo;
    } 
    public function setTitulo($titulo)
    {
        $this->titulo = $this->db->real_escape_string($titulo);
        // return $this;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
        return $this;
    }
    public function getDb()
    {
        return $this->db;
    }
    public function setDb($db)
    {
        $this->db = $db;
        return $this;
    }
    public function getComments(){
        //Conseguiremos las entradas como category
        $sql = "SELECT e.*, c.name AS 'categoriaName' FROM comments e INNER JOIN category c ON e.categoria_id = c.id ORDER BY e.id DESC LIMIT 5";
        // var_dump($sql);
        $comments = $this->db->query($sql);
        return $comments;
    }
    public function saveComment()
    {
        $sql ="INSERT INTO comments VALUES(NULL, NULL, '{$this->getCategoria_id()}','{$this->getTitulo()}','{$this->getDescripcion()}', CURDATE());";
        var_dump($sql);
        // die();
        $save = $this->db->query($sql);
        
        $result = false;
		if($save){
            $result = true;
            var_dump($result);
		}
		return $result;
    }
}
?>