<?php
namespace App\src\repository;
use App\src\config\Db;
class QuizRepository{
    private $db;
    public function __construct()
    {
        
        $this->db = new Db;
    }
    public function getAnswer($idquiz){
        $database = $this->db->verifConnect();
        $result = $database->prepare('SELECT * FROM `answers` WHERE id_q = :idquiz');
        $result->bindParam(':idquiz', $idquiz, \PDO::PARAM_STR);
        $result->execute();
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function addResult($rep,$idquiz){
        $database = $this->db->verifConnect();
        $result=$database->prepare('UPDATE xp SET resultat = (:valeur) WHERE id_quiz=:idquiz AND id_client=:id_client');
        $result->bindParam(':valeur', $rep,\PDO::PARAM_INT);
        $result->bindParam(':idquiz', $idquiz,\PDO::PARAM_INT);
        $result->bindParam(':idclient', $_COOKIE["pseudo"],\PDO::PARAM_STR);
        $result->execute();
    }
    public function getResult($idquiz){
        $database = $this->db->verifConnect();
        $result = $database->prepare('SELECT resultat FROM `xp` WHERE id_q = :idquiz');
        $result->bindParam(':idquiz', $idquiz, \PDO::PARAM_STR);
        $result->execute();
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
}
?>