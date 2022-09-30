<?php
require_once "app/controllers/cleaningController.php";
require_once "app/views/cleaningView.php";
require_once "app/models/cleaningModel.php";

$action="home";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if(!empty($_GET['action'])){
    $action=$_GET['action'];
}

$params = explode('/',$action);


switch($params[0]){
    case "home":
      $controller = new CleaningController();
      $controller->showProducts();  
        break;
    case "show":
        $controller = new CleaningController();
        $controller->showInfo($params[1]);
        switch($params[1]){//to go back home
            case "home":
                header("location: ". BASE_URL."home");
        }
}