<?php
require_once 'libs/Router.php';
require_once 'app/controllers/calculadoraController.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGIN", BASE_URL . 'login');
define("VER", BASE_URL . 'ver');





//crea el router
$router = new Router();

//define tabla de ruteo

$router->addRoute('sumar/:num1/:num2','GET','calculadoraController','sumar');
$router->addRoute('restar/:num1/:num2','GET','calculadoraController','restar');
$router->addRoute('multiplicar/:num1/:num2','GET','calculadoraController','multiplicar');
$router->addRoute('dividir/:num1/:num2','GET','calculadoraController','dividir');


//rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
