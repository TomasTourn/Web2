<?php

if(!empty($_GET['nombre'])){
    $nombre=$_GET['nombre'];
}

function showName($nombre){
    echo $nombre;
}
