<?php 

namespace App\src\controllers;

use App\src\model\Client;
use App\src\config\Session;
use App\src\repository\ClientRepository;
ini_set('display_errors', 'on');
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
            $this->clientRepository->newClient($client);
            
        }
       
        header('Location: index.php?page=account&action=list');
        require 'src/view/account.php';
        
    }
    public function login() {
        if($this->session->get('mail')){
            header('Location: index.php?page=account&action=list');
        }
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $client = new Client;
            $client->setMail($_POST['mail']);
            $client->setPassword($_POST['password']);
            

            if(($this->clientRepository->checkPass($client))){
                $clientInfo = $this->clientRepository->getClientInfo($client->getMail());
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
                header('Location: index.php?page=account&action=login');
            }
            
            
        }
        
        require 'src/view/account.php';

    }
    public function list()
    {
        echo $this->session->get('mail');
        var_dump($this->session);
        
        
    }
}
?>