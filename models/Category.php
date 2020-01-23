<?php
class Categoria {
    private $id;
    private $name;

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
        $sql = "SELECT * FROM category ORDER BY id ASC";
        $category = $this->db->query($sql);
        $results = array();
        if ($category && mysqli_num_rows($category) >= 1) {
            $results = $category;
        }
        return $results;
    }
}
?>