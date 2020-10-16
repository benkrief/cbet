<?php
namespace App\src\controller;

require_once("smodel/model.php");
//require_once 'template/template.php';

class DefaultController{
    public function home() {
        var_dump("coucou");
        die;
        require 'view/home.php';
    }
}



