<?php

require_once "bbdd.php";
require_once "index.php";

$action="home";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');

if(!empty($_GET['action'])){
    $action=$_GET['action'];
}

$params= explode('/',$action);

if($params[0]=="home"){
    require_once  "templates/header.php";
    showHome();
    require_once "templates/footer.php";
}
else if($params[0]=="tabla"){
    if($params[1]=="5"){
        imprimirTabla($params[1]);
    }
    else if($params[1]=="10"){
        imprimirTabla($params[1]);
    }
    else if($params[1]=="20"){
        imprimirTabla($params[1]);
    }


}