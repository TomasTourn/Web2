<link rel="stylesheet" href="ej6.css">
<?php

function imprimirTabla($limit){
    calcularTabla($limit);
}

if(!empty($_GET['limit'])){
    $limit=$_GET['limit'];
    calcularTabla($limit);
}

function calcularTabla($limit){
    //como linkear css en la tabla
    echo "<table>";
    echo "<thead> <tr><th> </th>";
    
    for($i=1;$i<21;$i++){
        echo "<th>$i</th>";
    }

    echo "</tr> </thead>";
   
    
    for($i=1;$i<$limit+1;$i++){
        
        echo "<tr>";
        echo "<td>num $i</td>";
        for($j=1;$j<21;$j++){
            $resultado= $i*$j;
            echo "<td>$resultado</td>";
        }
        echo "</tr>";
    }



    echo "</table>";
}

