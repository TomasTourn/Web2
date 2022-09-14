<?php


 function showHome(){
    include "./templates/header.php";
    ?>

    <a href="table">ver tabla</a>

    <form action="add"  method="POST">
    
    <label for="" >nombre</label>
    <input type="text" name="Nombre">

    <label for="">profesor</label>
    <input type="text" name="Profesor" id="">

    <button id="enviar">enviar</button>
</form>
 
<?php include "./templates/footer.php";}

?>