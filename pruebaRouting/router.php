<?php
require_once "bbdd.php";
require_once "index.php";
$action="home";

if(!empty($_GET['action'])){
    $action=$_GET['action'];
}

$params = explode('/',$action);

if($params[0]=="home"){
    showHome();
}
else if($params[0]=="tomy"){
    showName("tomy");
}
else if($params[0]=="lulo"){
    showName("lulo");
}
else if($params[0]=="lucho"){
    showName("lucho");
}
