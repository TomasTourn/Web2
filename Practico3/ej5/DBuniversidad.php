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
    showTable();
}

function deleteMateriaById($id){
    $db = connectDB();

    //ejecuto las consultas prepare y execute

    $query = $db->prepare('DELETE FROM materia WHERE id=?');//usar el ? 


    $query-> execute([$id]);
    showTable();
    
}

function getSearch($searched){
    $db = connectDB();
    $query = $db->prepare('SELECT * FROM materia WHERE Nombre  LIKE ? ');
    $query-> execute([$searched]);
    $materia = $query->fetchAll(PDO::FETCH_OBJ);
    ShowSearch($materia);


}

function EditarTabla($id,$nombre,$profesor){

    $db = connectDB();

    $query = $db->prepare('UPDATE materia SET Nombre=?, Profesor=? WHERE materia.id=?');

    $query-> execute([$nombre,$profesor,$id]);
    showTable();
}

//deleteMateria();
//insertUniversidad();
//mostrarTabla();