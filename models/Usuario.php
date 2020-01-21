<?php
class Usuario{
    private $id;
    private $name;
    private $lastname;
    private $email;  
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
        return  $this->name;
    }

    public function setName($name)
    {
        $this->name = $this->db->real_escape_string($name);
        // $this->name = $name;
        // return $this;
    }
    public function getLastname()
    {
        return $this->lastname;
    }
    public function setLastname($lastname)
    {
        // $this->lastname = $lastname;
        $this->lastname = $this->db->real_escape_string($lastname);
        // return $this;
    } 
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);
        // $this->email = $this->db->real_escape_string($email);
    }
    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
    
    public function save(){
        // try{
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getName()}', '{$this->getLastname()}', '{$this->getEmail()}', NULL);";
        $save = $this->db->query($sql);
        $result = false;
		if($save){
			$result = true;
		}
		return $result;
    }    
}

?>