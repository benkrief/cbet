<?php
namespace App\src\repository;

use App\src\config\Db;
use App\src\config\Session;
use App\src\model\Client;

class ClientRepository
{
    private $db;
    public function __construct()
    {
        if (!isset($this->postRepository)) {
            $this->db = new Db;
        }
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

        $result = $database->prepare('INSERT INTO Client(gender,mail,password,nom,prenom,dob,adress)
        VALUES (:gender, :mail, :password , :nom , :prenom, :dob , :adress)');
        $result->bindValue(':gender', $client->getGender(), \PDO::PARAM_STR);
        $result->bindValue(':mail', $client->getMail(), \PDO::PARAM_STR);
        $result->bindValue(':password', $client->getPassword(), \PDO::PARAM_STR);
        $result->bindValue(':nom', $client->getNom(), \PDO::PARAM_STR);
        $result->bindValue(':prenom', $client->getPrenom(), \PDO::PARAM_STR);
        $result->bindValue(':dob', $client->getDob(), \PDO::PARAM_STR);
        $result->bindValue(':adress', $client->getAdress(), \PDO::PARAM_STR_CHAR);    
        $result->execute();

        $this->session->set('gender', $client->getGender());
        $this->session->set('nom', $client->getNom());
        $this->session->set('prenom', $client->getPrenom());
        $this->session->set('mail', $client->getMail());
    }
    

    public function checkPass(Client $client){
        $database = $this->db->verifConnect();

        $sql = $database->prepare('SELECT password FROM client WHERE mail = :mail');
        $sql->bindParam(':mail', $_POST["mail"]);
        $sql->execute();
        $result = $sql->fetch();
        return password_verify($client->getPassword(), $result['password'] ?? null);
    }

   

}
?>