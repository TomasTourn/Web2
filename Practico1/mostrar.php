<?php


$nombres= array("jose","luciano","micaela","tomas","francisco");



if(isset($_GET['limit'])){
    $limit=$_GET['limit'];
    echo "entro";
}
else{
    $limit=-1;
    echo "hola";
}
echo "<ul>";
for($i=0;$i<$limit;$i++){

   $listado="<li>$i</li>";
   echo $listado;
}

echo "</ul>";
