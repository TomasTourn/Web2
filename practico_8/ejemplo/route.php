<?php
require_once 'libs/Router.php';
require_once 'app/controllers/controller.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGIN", BASE_URL . 'login');
define("VER", BASE_URL . 'ver');





//crea el router
$router = new Router();

//define tabla de ruteo
$router->addRoute('home','GET','controller','showHome');


//rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
