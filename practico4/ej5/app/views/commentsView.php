<?php

class commentsView{

    function showComments($comments){
        
        echo "<ul>";

        foreach ($comments as $comment){
            echo "<li>Anonimo</li>
                  <li>$comment->comment</li>";  
        }

        echo "</ul>";
    }


    function showForm(){?>

        <form action="add"  method="POST">
    
       <label for="">AgregarComentario</label>
       <input type="text" name="comment" id="">
    
        <button id="enviar">enviar</button>
    </form>
    <?php

    }

}