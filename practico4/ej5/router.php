<?php
require_once "app/views/commentsView.php";
require_once "app/controllers/commentsController.php";
require_once "app/models/commentsModel.php";

$action="home";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if(!empty($_GET['action'])){
    $action=$_GET['action'];
}

$params = explode('/',$action);


switch($params[0]){
    case "home":
      $controller = new commentsController();
      $controller->showComments();
      break;

    case "form":
        $controller = new commentsController();
        $controller->showForm();
        break;

    case "add":
        $controller = new commentsController();
        $controller->addComment();
        break;
}