<?php
 require_once "libs/Smarty.class.php";
class cleaningView{
   
   /* function __construct(){
        $smarty = new Smarty();
    }*/
    
    function showProducts($products){
        $smarty = new Smarty();
        $smarty->assign('titulo','lula');
        $smarty->assign('encabezado','mvc');
        $smarty->assign('footer','footer');
        $smarty->display('templates/header.tpl');
        
        echo "<ul>";
        foreach($products as $product){
            echo "<li> <a href='show/$product->name'>$product->name</a></li>";       
        }
        echo "</ul>";
        $smarty->display('templates/footer.tpl');
    }


    function productInfo($product){

        echo "<ul>
            <li>$product->name</li>
            <li>$product->price</li>
            <li>$product->description</li>
        </ul>
        <a href='home'>volver a home</a></li>";

    }

    function showAll($products){
        
        $smarty = new Smarty();
        $smarty->assign('products',$products);
        $smarty->display('templates/showAll.tpl');

        var_dump($products);



    }


}

