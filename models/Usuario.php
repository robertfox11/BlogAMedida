<?php
class Usuario {
    
    private $id;
    private $name;
    private $lastname;
    private $email;  
    // private $password;
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
        return $this;
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
        
        // return $this;
        // $this->email = $this->db->real_escape_string($email);
    }
    // function getPassword() {
	// 	return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
	// }

    // function setPassword($password) {
    //     $this->password = $password;
    //     return $this;
	// }

    
    public function save(){
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getName()}', '{$this->getLastname()}', '{$this->getEmail()}');";
        var_dump($sql);
        $save = $this->db->query($sql);
        var_dump($save);
        $result = false;
		if($save){
			$result = true;
		}
		return $result;
    }    
    public function login($usuario){
		$result = false;
		$email = $usuario;
		// $name = $this->name;
		var_dump($email);

        // Comprobar si existe el usuario
		$sql = "SELECT * FROM usuarios WHERE email = '$email'";
        var_dump($sql);
        $login = $this->db->query($sql);
		
        var_dump($login);	
		if($login && $login->num_rows == 1){
			$usuario = $login->fetch_object();
	
			// Verificar la contraseña
			$verify = $usuario->email;			
			if($verify){
				$result = $usuario;
			}
		}
		
		return $result;
    }
}

?>