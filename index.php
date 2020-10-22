<?php
require_once 'vendor/autoload.php';
use App\src\config\Router;


$router = new Router();
$router->loadRoutes();

?>