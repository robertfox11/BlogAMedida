<?php
class Database{
    public $host;
    public $db;
    public $user;
    public $password;
    public $charset;

    public function __construct()
    {
        //inicializamos las variables
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset = constant('CHARSET'); 
    }
    function connect(){
   
        try{
            $connection ="mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            // var_dump($connection);
            $options =[
                PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES  => true,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            // echo "Connected successfully";
            return $pdo;
        }catch(PDOException $e){
            var_dump('Error Conection: '. $e->getMessage());
        }
        
    }
}
?>