<?php


$num1=(int)$_POST['num1'];
$num2=(int)$_POST['num2'];


$operacion=$_POST['operaciones'];
if(empty($_POST['num1']||empty($_POST['num2']))||(($num1&&$num2)==0)){

    echo "ingrese ambos numeros";

}
else{
    $resultado;
        if($operacion=='+'){
            $resultado=$num1+$num2;
        }
        else if($operacion=='-'){
            $resultado=$num1-$num2;
        }
        else if($operacion=='/'){
            $resultado=$num1/$num2;
        }
        else if($operacion=='*'){
            $resultado=$num1*$num2;
        }
        echo "el resultado es ". $resultado;


}