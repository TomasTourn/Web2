<?php


require_once "DBuniversidad.php";
require_once "router.php";
function addMateria(){

    $nombre=$_POST['Nombre'];
    $profesor=$_POST['Profesor'];

    insertMateria($nombre,$profesor);
    

}


function deleteMateria($id){
    deleteMateriaById($id);
    
}
function showTable(){
    $materia =getUniversidad();
         echo "<table> 
                 <thead>
                     <tr>
                         <th>id</th>
                         <th>Nombre</th>
                         <th>Profesor</th>
                     </tr>
                 </thead>";
         

         foreach($materia as $mat){
             echo "<tr>
                         <td>$mat->id</td>    
                         <td>$mat->Nombre</td>      
                         <td>$mat->Profesor</td>  
                         <td><a href='delete/$mat->id'>eliminar</a></td>
                         <td><a href='editar'>editar</a></td>
                 </tr>";
         }
         echo "</table>";
 }

 function showEditar(){
?>
    <form action="add"  method="POST">
    
    <label for="" >nombre</label>
    <input type="text" name="Nombre">

    <label for="">profesor</label>
    <input type="text" name="Profesor" id="">

    <button id="enviar">editar</button>
</form>



 <?php} 