<?php   


require_once 'config/cfTrabalhos.php';

class db extends cfTrabalhos{
    
    
    private $user = "root";
    private $pass = "1234";
    private $host = "127.0.0.1";
    private $database = "techbook";

    
    
    private function Connect(){
        $conn = new PDO("mysql:host= $this->host;dbname=$this->database", $this->user, $this->pass);
        return $conn;        
    }
    
    public function RunQuery($sql){
        $stm = $this->Connect()->prepare($sql);
        return $stm->execute();
    }
    
    public function RunSelect($sql) {
        $stm = $this->Connect()->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
   
}
