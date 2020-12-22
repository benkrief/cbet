<?php
namespace App\src\controllers;

class FooterController{
    public function us() {
        require 'src/view/footer/us.php';
    }
    public function cn() {
        require 'src/view/footer/cn.php';
    }
    public function cd() {
        require 'src/view/footer/conditions.php';
    }
    public function deb() {
        require 'src/view/footer/debut.php';
    }
    public function fdbk() {
        require 'src/view/footer/us.php';
    }
    public function nws() {
        require 'src/view/footer/nws.php';
    }
    
}

?>
