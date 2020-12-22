<?php
namespace App\src\repository;

use App\src\config\Db;
use App\src\config\Session;
use App\src\model\Client;

class ClientRepository
{
    private $db;
    private $session;
    public function __construct()
    {

        $this->db = new Db;
       
        if (!isset($this->session)) {            
            $this->session = new Session;
        }
    }
    public function getClient()
    {
        $database = $this->db->verifConnect();
        $result = $database->query('SELECT * FROM `client`');
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function getClientInfo($mail)
    {
        $database = $this->db->verifConnect();
        $result = $database->prepare('SELECT * FROM `client` WHERE mail = :mail');
        $result->bindValue(':mail', $mail, \PDO::PARAM_STR);
        $result->execute();
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
    

    public function newClient(Client $client)
    {
        $hashpass = password_hash($client->getPassword(), PASSWORD_DEFAULT);
        $client->setPassword($hashpass);
        $database = $this->db->verifConnect();

        $result = $database->prepare('INSERT INTO Client(gender,mail,password,nom,prenom,dob,adress,tel)
        VALUES (:gender, :mail, :password , :nom , :prenom, :dob , :adress, :tel)');
        $result->bindValue(':gender', $client->getGender(), \PDO::PARAM_STR);
        $result->bindValue(':mail', $client->getMail(), \PDO::PARAM_STR);
        $result->bindValue(':password', $client->getPassword(), \PDO::PARAM_STR);
        $result->bindValue(':nom', $client->getNom(), \PDO::PARAM_STR);
        $result->bindValue(':prenom', $client->getPrenom(), \PDO::PARAM_STR);
        $result->bindValue(':dob', $client->getDob(), \PDO::PARAM_STR);
        $result->bindValue(':adress', $client->getAdress(), \PDO::PARAM_STR_CHAR);
        $result->bindValue(':tel', $client->getTel(), \PDO::PARAM_INT);     
        $result->execute();
    }
    public function addSolde($val, $usr){
        $database = $this->db->verifConnect();
        $result=$database->prepare('UPDATE Client SET solde = (:valeur) WHERE mail=:usr');
        $result->bindParam(':valeur', $val,\PDO::PARAM_INT);
        $result->bindParam(':usr', $usr,\PDO::PARAM_STR);
        $result->execute();
    }
    public function lessSolde($val, $usr){
        $database = $this->db->verifConnect();
        $result=$database->prepare('UPDATE Client SET solde = (:valeur) WHERE mail=:usr');
        $result->bindParam(':valeur', $val,\PDO::PARAM_INT);
        $result->bindParam(':usr', $usr,\PDO::PARAM_STR);
        $result->execute();
    }
    

    public function checkPass(Client $client){
        $database = $this->db->verifConnect();

        $result = $database->prepare('SELECT password FROM client WHERE mail = :mail');
        $result->bindValue(':mail', $client->getMail(), \PDO::PARAM_STR);
        $result->execute();

        return password_verify($client->getPassword(), $result->fetchColumn());
    }

   

}
?>