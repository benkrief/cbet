<?php 
namespace App\src\controllers;

use App\src\model\Client;
use App\src\config\Session;
use App\src\repository\ClientRepository;

class AccountController{
    private $clientRepository;
    private $session;
    public function __construct()
    {
        if (!isset($this->clientRepository)) {
            $this->clientRepository = new ClientRepository;
        }
        if (!isset($this->session)) {            
            $this->session = new Session;
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
            $this->session->set('gender', $_POST['gender']);
            $this->session->set('nom', $_POST['nom']);
            $this->session->set('prenom', $_POST['prenom']);
            $this->session->set('mail', $_POST['mail']);
            $this->clientRepository->newClient($client);
            header('Location: index.php?page=account&action=list');
        }
        require 'src/view/account.php';
    }
    public function log() {
        if($this->session->get('mail')){
            header('Location: index.php?page=account&action=list');
        }
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $client = new Client;
            $client->setMail($_POST['mail']);
            $client->setPassword($_POST['password']);

            if(($this->clientRepo->checkPass($client))){
                $clientInfo = $this->clientRepo->getClientInfo($client->getMail());
                foreach ($clientInfo as $info){
                    $this->session->set('gender', $info['gender']);
                    $this->session->set('nom', $info['nom']);
                    $this->session->set('prenom', $info['prenom']);
                    $this->session->set('mail', $info['mail']);
                    
                    
                }
                header('Location: index.php?page=account&action=list');
            }
            else{
                echo "Vos identifiants sont incorrectes";
                header('Location: index.php?page=account&action=log');
            }
            
            
        }
        
        require 'src/view/account.php';

    }
    public function list()
    {
        var_dump($_SESSION);
        
    }
}
?>