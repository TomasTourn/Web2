<?php
$nombre = $_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$pais=$_POST['pais'];
$intereses=$_POST['intereses'];

if(empty ($_POST['nombre'])||empty ($_POST['apellido'])||empty ($_POST['edad'])||empty ($_POST['sexo'])||empty ($_POST['pais'])||empty ($_POST['pais'])){
    echo "completar todos los campos";
}
else{
    echo "Su nombre es " . $nombre ." ".$apellido ." y tiene ".$edad. " años,  su genero es " . $sexo ." vive en  "."$pais" . " y sus intereses son ";  
    foreach($intereses as $i){
        echo $i ."  ";
    }
}
