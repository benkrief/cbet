<?php
namespace App\src\controllers;

require_once("model/model.php");


class DefaultController{
    public function home() {
        var_dump("coucou");
        die;
        require 'view/home.php';
    }
}



