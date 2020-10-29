<?php
namespace App\src\model;

require_once('vendor\autoload.php');

class Client
{
    private $id;
    private $name;
    private $prenom;
    private $dob; //Date of Birth
    private $adress;
    private $mail;
    private $password;


    public function getId(){
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->lastName = $prenom;
    }

    public function getDob()
    {
        return $this->dob;
    }

    public function setDob($dob)
    {
        $this->mail = $dob;
    }
    public function getAdress()
    {
        return $this->adress;
    }

    public function setAdress($adress)
    {
        $this->mail = $adress;
    }
    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }  

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->pass = $password;
    }

    public function getLastConnection()
    {
        return $this->lastConnection;
    }

    public function setLastConnection($lastConnection)
    {
        $this->lastConnection = $lastConnection;
    }
}
?>