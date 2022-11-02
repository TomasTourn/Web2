<?php

class calculadoraController{


    function sumar($params = null){
        $n1=$params[':num1'];
        $n2=$params[':num2'];

        $resultado=$n1+$n2;
        echo "la suma de ". $n1 . " + ". $n2 . " es ". $resultado;


    }

    function restar($params = null){
        $n1=$params[':num1'];
        $n2=$params[':num2'];

        $resultado=$n1-$n2;
        echo "la resta de ". $n1 . " - ". $n2 . " es ". $resultado;


    }

    function multiplicar($params = null){
        $n1=$params[':num1'];
        $n2=$params[':num2'];

        $resultado=$n1*$n2;
        echo "la multiplicacion de ". $n1 . " * ". $n2 . " es ". $resultado;


    }

    function dividir($params = null){
        $n1=$params[':num1'];
        $n2=$params[':num2'];

        $resultado=$n1/$n2;
        echo "la division de ". $n1 . " / ". $n2 . " es ". $resultado;


    }











}