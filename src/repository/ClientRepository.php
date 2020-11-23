<?php
namespace App\src\repository;

use App\src\config\Db;
use App\src\model\Client;

class ClientRepository
{
    private $db;
    public function __construct()
    {
        if (!isset($this->postRepository)) {
            $this->db = new Db;
        }
    }
    public function getClient()
    {
        $database = $this->db->verifConnect();
        $result = $database->query('SELECT * FROM `client`');
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
        var_dump($client->getDob());
        $result->bindValue(':adress', $client->getAdress(), \PDO::PARAM_INT);    
        $result->execute();
    }

}
?>