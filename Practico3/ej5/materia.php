<?php


require_once "DBuniversidad.php";
require_once "router.php";
function addMateria(){

    $nombre=$_POST['Nombre'];
    $profesor=$_POST['Profesor'];

    insertMateria($nombre,$profesor);
    

}

function Editar($id){
    $nombre=$_POST['NombreEditado'];
    $profesor=$_POST['ProfesorEditado'];
    EditarTabla($id,$nombre,$profesor);
     
}

function deleteMateria($id){
    deleteMateriaById($id);
    
}
function Search(){

    $requestedSearch=$_POST['search'];
    $searched= "$requestedSearch%";
    getSearch($searched);


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
                         <td><a href='editar/$mat->id'>editar</a></td>
                 </tr>";
         }
         echo "</table>";
         echo "<a href='home'>ir a formulario</a>";
 }

 function ShowSearch($materia){
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
                         <td><a href='editar/$mat->id'>editar</a></td>
                 </tr>";
         }
         echo "</table>";
         echo "<a href='home'>ir a formulario</a>";
 }


 function showEditar($id){
    $materia=getUniversidad();
 foreach($materia as $mat){
    if ($mat->id==$id){
        ?>
       
        <form action="<?php echo "edit/$id"?>"  method="POST">
        
        <label for="" >Nombre</label>
        <input type="text" value="<?php echo $mat->Nombre ?>" name="NombreEditado">
    
        <label for="">profesor</label>
        <input type="text" value="<?php echo $mat->Profesor ?>" name="ProfesorEditado" id="">
    
        <button id="enviar">editar</button>
    </form>
        
    
    <?php
    
    }

 }
 






}
?>