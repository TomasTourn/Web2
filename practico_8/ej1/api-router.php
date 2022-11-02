<?php
require_once 'libs/Router.php';
require_once 'app/controllers/tasksController.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGIN", BASE_URL . 'login');
define("VER", BASE_URL . 'ver');





//crea el router
$router = new Router();

//define tabla de ruteo
$router->addRoute('tasks','GET','tasksController','getAll');
$router->addRoute('tasks/:ID','GET','tasksController','getOne');
$router->addRoute('tasks/:ID','DELETE','tasksController','deleteTask');
$router->addRoute('tasks','POST','tasksController','addTask');
$router->addRoute('tasks/:ID','PUT','tasksController','updateTask');


//rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
