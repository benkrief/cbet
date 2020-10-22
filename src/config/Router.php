<?php
namespace App\src\config;

use App\src\controllers\DefaultController;

require_once 'vendor/autoload.php';

class Router{
    public function loadRoutes(){
        try{
            if(!isset($_GET['action'])){
                throw new \Exception('Action must be defined!');
            }

            $action = $_GET['action'];

            if(isset($_GET['page']) && $_GET['page'] === 'registration'){
                echo 'hola';
            } else {
                $controller = new DefaultController();
            }

            $controller->{$action}();
        } catch (\Exception $e){
            throw new \Exception('An error occured!');
        }
    }
}