<link rel="stylesheet" href="ej6.css">

<?php

$dinero=$_POST['dinero'];

if(empty($_POST['dinero'])){
    echo "ingresar monto";
}
else{
    $montoInicial=$dinero;
    $interes=10;//%
    


    echo "<table>";
    echo "<thead>
         <tr>
            <th>enero</th>
            <th>febrero</th>
            <th>marzo</th>
            <th>abril</th>
            <th>mayo</th>
            <th>junio</th>
            <th>julio</th>
            <th>agosto</th>
            <th>septiembre</th>
            <th>octubre</th>
            <th>noviembre</th>
            <th>diciembre</th>
        <tr> 
    </thead>";

    echo "<td>$dinero</td>";
    for($i=0;$i<11;$i++){

        $dineroInteres=($dinero*$interes)/100;
        $dinero+=$dineroInteres;
       echo "<td>$dinero</td>";
      

    }


    echo "</table>";
    echo "la ganancia total es ". $dinero-$montoInicial;
}
