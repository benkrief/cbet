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
        
        if(isset($_POST['submit']))
        {
            $client = new Client;
            $client->setGender($_POST['gender']);
            $client->setMail($_POST['mail']);
            $client->setPassword($_POST['password']);
            $client->setNom($_POST['nom']);
            $client->setPrenom($_POST['prenom']);
            $client->setDob($_POST['dob']);
            $client->setAdress($_POST['adress']);
            $client->setTel($_POST['tel']);
            $this->clientRepository->newClient($client);
            $this->session->set("mail", $_POST['mail']);
            
        }
       
        header('Location: index.php?page=account&action=list&usr='.$this->session->get('mail'));
        require 'src/view/account.php';
        
    }
    public function login() {
        
        if($this->session->get('mail')){
            header('Location: index.php?page=account&action=list&usr='.$this->session->get('mail'));
        }
        
        if(isset($_POST['submit']))
        {
            $client = new Client;
            $client->setMail($_POST['mail']);
            $client->setPassword($_POST['password']);

            

            if(($this->clientRepository->checkPass($client))){
                $clientInfo = $this->clientRepository->getClientInfo($client->getMail());
                
                foreach ($clientInfo as $info){
                    $this->session->set('mail', $info['mail']);
                }    
                header('Location: index.php?page=account&action=list&usr='.$this->session->get('mail'));
            }
            else{
                $this->session->set('error','<label>Vos identifiants sont incorrectes</label>');
                
            }     
        }
        require 'src/view/account.php';

    }
    public function list()
    {
        
        $clientInfo = $this->clientRepository->getClientInfo($_GET["usr"]);
        foreach ($clientInfo as $info){
            if(!(isset($_COOKIE["pseudo"]))){
                setcookie('pseudo', $info["mail"], time() + 365*24*3600, null, null, false, true);
                setcookie('gender', $info["gender"], time() + 365*24*3600, null, null, false, true);
                setcookie('nom', $info["nom"], time() + 365*24*3600, null, null, false, true);
                setcookie('prenom', $info["prenom"], time() + 365*24*3600, null, null, false, true);
                setcookie('solde', $info["solde"], time() + 365*24*3600, null, null, false, true);
                setcookie('adress', $info["adress"], time() + 365*24*3600, null, null, false, true);
                setcookie('tel', $info["tel"], time() + 365*24*3600, null, null, false, true);
            }
    
        }
        
        require 'src/view/accountpage.php';
        
    }
    public function logout(){   
        setcookie('pseudo');
        setcookie('gender');
        setcookie('nom');
        setcookie('prenom');
        setcookie('solde');
        setcookie('adress');
        setcookie('tel');
        header('Location: index.php?page=account&action=login');
    }
}
?>