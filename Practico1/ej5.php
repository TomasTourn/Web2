<?php

if(empty($_POST['kg'])||empty($_POST['altura'])){
    echo "llene bien los campos";
}
else{

    $kg=$_POST['kg'];
    $altura=$_POST['altura'];
    echo number_format($altura,2);

    $indice=$kg/pow($altura,2);
  
    if(($indice<18.50)){
        echo "bajo peso";
    }
    else if (($indice>18.50)&&($indice<25)){
        echo "normal";
    }

    else if( ($indice>=25)&&($indice<30)){
        echo "sobrepeso";
    }
    else if( ($indice>=30)){
        echo "obesidad";
    }


}


