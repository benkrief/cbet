<?php
namespace App\src\model;

require_once 'vendor/autoload.php';

class Client
{
    private $gender;
    private $nom;
    private $prenom;
    private $dob; //Date of Birth
    private $adress;
    private $tel;
    private $mail;
    private $password;
    private $solde;


    public function getGender(){
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getDob()
    {
        return $this->dob;
    }

    public function setDob($dob)
    {
        $this->dob = $dob;
    }
    public function getAdress()
    {
        return $this->adress;
    }

    public function setAdress($adress)
    {
        $this->adress = $adress;
    }
    public function getTel(){
        return $this->tel;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
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
        $this->password = $password;
    }
    public function getSolde(){
        return $this->solde;
    }

    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

}
?>