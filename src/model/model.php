<?php

class DB {
    private $host = "localhost";
    private $user = "ben";
    private $password = "ben11";
    private $database = "cbet";
    private $db;
    public function __construct($host =null, $user = null, $password = null, $database =null){
        if($host != null){
            $this->host=$host;
            $this->user=$user;
            $this->$password=$password;
            $this->$database=$database;
        }
        try{
        $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database,
         $this->user, $this->password, array(
             PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8',
             PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        }catch(PDOException $e){
            die('Impossible de se connecter à la base de donnée');
        }
}
}
?>
