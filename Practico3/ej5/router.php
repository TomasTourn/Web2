<?php

require_once "formUni.php";
require_once "DBuniversidad.php";
require_once "materia.php";

$action="home";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if(!empty($_GET['action'])){
    $action=$_GET['action'];
}

$params = explode('/',$action);


if($params[0]=="home"){
    showHome();
}

else if($params[0]=="table"){
    showTable();
}
else if($params[0]=="delete"){
    
    deleteMateria($params[1]);//no me deja eliminar mas de uno a la vez
    //header("location: ". BASE_URL."table");// porque no funca?
    
   
}

else if($params[0]=="add"){
    addMateria();
    
}



