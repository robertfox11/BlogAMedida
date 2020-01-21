<?php
class Database{
    
        public static function connect(){
            $db = new mysqli('localhost:3308', 'root', '', 'databaseblog');
            $db->query("SET NAMES 'utf8'");
            return $db;
        }
    // function connect(){
   
    //     try{
    //         $connection ="mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
    //         // var_dump($connection);
    //         $options =[
    //             PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
    //             PDO::ATTR_EMULATE_PREPARES  => true,
    //         ];
    //         $pdo = new PDO($connection, $this->user, $this->password, $options);
    //         // echo "Connected successfully";
    //         return $pdo;
    //     }catch(PDOException $e){
    //         var_dump('Error Conection: '. $e->getMessage());
    //     }
        
    // }
}
?>