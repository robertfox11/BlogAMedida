<?php
class Categoria {
    private $id;
    private $name;
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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    public function getCategory(){
        $categorias = $this->db->query("SELECT * FROM category ORDER BY id DESC;");
		return $categorias;
    }
}
?>