<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>texto normal</p>
    <?php

    $nombre = "tomas" ;

    echo "<p>" . "hola " . $nombre ."</p>";// el punto se usa para concatenar
    //variables
    $aBool =  true; //boolean
    $name = "josé"; //string
    $cont = 12;  //integer 

    echo "$name , $cont, $aBool";

    Define ("SALUDO","Hello world");// constante
    echo "<p>" . SALUDO . "</p>"; 

    //arreglos

    $arreglo = array("motorola","samsung","apple"); //doy valores al arreglo
    echo $arreglo[1];//imprimo uno en especifico
    $count = count($arreglo);//cantidad de elementos en mi arreglo
    echo "$count";


    //arreglos asociativos
    $alturas= array(
        "martin"=>170,
        "julieta"=>176,
        "lucas"=> 150
    );
    echo "<li>".$alturas["julieta"]."</li>";    ?>
</body>
</html>