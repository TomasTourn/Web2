<?php

require_once "formUni.php";
require_once "materia.php";

function connectDB(){
    //me conecto a la base de datos
    $db = new PDO('mysql:host=localhost;'.'dbname=universidad;charset=utf8','root',''); 
    return $db;
    
}

function getUniversidad(){
    $db = connectDB();

    $query = $db->prepare('SELECT * FROM materia');
    $query-> execute();

    $materia = $query->fetchAll(PDO::FETCH_OBJ);


    return $materia;
}


 function insertMateria($nombre,$profesor){
    $db = connectDB();
    
    
    //ejecuto las consultas prepare y execute

    $query = $db->prepare('INSERT INTO materia (Nombre, Profesor) VALUES ( ?, ?)');//inserto a la tabla


    $query-> execute([$nombre,$profesor]);// ponelo como arreglo
 
}

function deleteMateriaById($id){
    $db = connectDB();

    //ejecuto las consultas prepare y execute

    $query = $db->prepare('DELETE FROM materia WHERE id=?');//usar el ? vegano


    $query-> execute([$id]);
    showTable();
    
}
//deleteMateria();
//insertUniversidad();
//mostrarTabla();