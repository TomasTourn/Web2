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

    <label for="">Carrera</label>
    <input type="text" name="Carrera" id="">
    <label for="">duracion</label>
    <input type="text" name="Duracion" id="">

    <button id="enviar">enviar</button>
</form>
 
<form action="search" method="POST">

<label for="">Buscador por Materia</label>
<input type="text" name="search">
<button>Buscar</button>
</form>


<?php include "./templates/footer.php";}

?>