<?php
namespace src\controller;

require_once("smodel/model.php");


class DefaultController{
    public function home() {
        var_dump("coucou");
        die;
        require 'view/home.php';
    }
}



