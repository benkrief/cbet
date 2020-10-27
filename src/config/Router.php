<?php
namespace App\src\config;

use App\src\controllers;
use App\src\controllers\AccountController;
use App\src\controllers\DefaultController;
use App\src\controllers\QuizController;

require_once 'vendor/autoload.php';

class Router{
    public function loadRoutes(){
        try{
            if(!isset($_GET['page'])){
                $controller = new DefaultController;
                $controller->home();
            }
            else {
                $action = $_GET['action'];
                $page=$_GET['page'];
                $controller = new DefaultController();
                
                if($page === 'quiz'){
                    $controller = new QuizController;
                }
                if($page === 'account'){
                    $controller = new AccountController;
                }
                $controller->{$action}();
            }
        } catch (\Exception $e){
            throw new \Exception('An error occured!');
        }
    }
}