<?php
require_once 'libs/Router.php';
require_once 'app/controllers/tasksController.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGIN", BASE_URL . 'login');
define("VER", BASE_URL . 'ver');





//crea el router
$router = new Router();

//define tabla de ruteo
$router->addRoute('home','GET','tasksController','getAll');
$router->addRoute('getOne/:ID','GET','tasksController','getOne');
$router->addRoute('add','POST','tasksController','add');


//rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
