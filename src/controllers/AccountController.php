<?php 
namespace App\src\controllers;

use App\src\model\Client;
use App\src\repository\ClientRepository;

class AccountController{
    private $clientRepository;
    public function __construct()
    {
        if (!isset($this->clientRepository)) {
            $this->clientRepository = new ClientRepository;
        }
    }
    
    public function sign() {
        
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $client = new Client;
            $client->setGender($_POST['gender']);
            $client->setMail($_POST['mail']);
            $client->setPassword($_POST['password']);
            $client->setNom($_POST['nom']);
            $client->setPrenom($_POST['prenom']);
            $client->setDob($_POST['dob']);
            $client->setAdress($_POST['adress']);
            $this->clientRepository->newClient($client);
            header('Location: index.php?page=account&action=list');
        }
        require 'src/view/account.php';
    }
    public function list()
    {
        $client = $this->clientRepository->getClient();
        require 'src/view/account.php';
        foreach ($client as $info)
        {
            echo "Bonjour à vous ".$info['gender']." ".$info['nom'];
        }
        
    }
}
?>