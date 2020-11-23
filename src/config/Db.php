<?php
namespace App\src\config;

class Db {
    private const DB_HOST= 'mysql:host=localhost;dbname=cbet';
    private const DB_USER= 'ben';
    private const DB_PASSWORD = 'ben11';
    private $db;

    public function  getConnect()
    {
        try{
        $this->db= new \PDO(self::DB_HOST,self::DB_USER, self::DB_PASSWORD);
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $this->db;
        }
        catch(\PDOException $e){
            die('Impossible de se connecter à la base de donnée');
        }

    }
    public function verifConnect()
    {
        if(!isset($this->db)){
            return $this->getConnect();
        }
        
        return $this->db;
    }
}
?>
