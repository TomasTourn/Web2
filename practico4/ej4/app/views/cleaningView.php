<?php

class cleaningView{

    function showProducts($products){
      
        include  "templates/header.php";
        echo "<ul>";
        foreach($products as $product){
            echo "<li> <a href='show/$product->name'>$product->name</a></li>";       
        }
        echo "</ul>";
        include  "templates/footer.php";
    }


    function productInfo($product){

        echo "<ul>
            <li>$product->name</li>
            <li>$product->price</li>
            <li>$product->description</li>
        </ul>
        <a href='home'>volver a home</a></li>";

    }



}

