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
        $this->name = $this->db->real_escape_string($name);

        return $this;
    }
    public function getCategory(){
        $categorias = $this->db->query("SELECT * FROM category ORDER BY id DESC;");
		return $categorias;
    }
    public function saveCategory()
    {
        $sql ="INSERT INTO category VALUES(NULL, '{$this->getName()}');";
        $save = $this->db->query($sql);
        // var_dump($save);
        $result = false;
		if($save){
			$result = true;
		}
		return $result;
    }
}
?>