<?php

function conectarDB(){
    //me conecto a la base de datos
    $db = new PDO('mysql:host=localhost;'.'dbname=deudas;charset=utf8','root',''); 
    return $db;
    
}


function getPagos(){
    $db = conectarDB();

    //ejecuto las consultas prepare y execute

    $query = $db->prepare('SELECT * FROM pagos');
    $query-> execute();


    //obtengo los datos de la consulta
    $pagos = $query->fetchAll(PDO::FETCH_OBJ);//devuelve un arreglo con todos los pagos


    return $pagos;
}

    $pagos =getPagos();




    function mostrarTabla(){
       $pagos =getPagos();
            echo "<table> 
                    <thead>
                        <tr>
                            <th>Deudor</th>
                            <th>Cuota</th>
                            <th>Cuota Capital</th>
                            <th>Fecha Pago</th>
                            <th>id</th>
                        </tr>
                    </thead>";
            

            foreach($pagos as $pago){
                echo "<tr>
                            <td>$pago->deudor</td>    
                            <td>$pago->cuota</td>      
                            <td>$pago->cuota_capital</td>  
                            <td>$pago->fecha_pago</td>  
                            <td>$pago->id</td>  
                    </tr>";
            }
            echo "</table>";
    }

    function setPagos(){
        $db = conectarDB();
    
        //ejecuto las consultas prepare y execute

        $query = $db->prepare('INSERT INTO pagos (`deudor`, `cuota`, `cuota_capital`, `fecha_pago`, `id`) VALUES ("vegano", "1", "2000", "2022-09-05", NULL)');//inserto a la tabla


        $query-> execute();
    }


  
    //setPagos();


    function deletePagos(){
        $db = conectarDB();
    
        //ejecuto las consultas prepare y execute
    
        $query = $db->prepare('DELETE FROM pagos WHERE deudor="lucas"');//elimino lucas


        $query-> execute();
    
    }
    //deletePagos();

    function subirDatosForm(){
        if(empty($_POST['deudor'])||empty($_POST['cuota'])||empty($_POST['cuota_capital'])||empty($_POST['fecha_pago'])){
            echo "llene los campos";
        }else{
            $deudor=$_POST['deudor'];
            $cuota=$_POST['cuota'];
            $cuota_capital=$_POST['cuota_capital'];
            $fecha_pago=$_POST['fecha_pago'];
           // var_dump($deudor,$cuota,$cuota_capital,$fecha_pago);

            $pagos=getPagos();
            $coincide=false;
            foreach($pagos as $pago){
                var_dump($pago->deudor);
                var_dump($deudor);
                
               
                if(($pago->deudor==$deudor)&&($pago->cuota==$cuota)){

                    $coincide=true;
                    var_dump("entro");
                }
                var_dump($coincide);
    
            }

            if($coincide==false){
                $db = conectarDB();
                $query = $db->prepare("INSERT INTO pagos (deudor, cuota, cuota_capital, fecha_pago) VALUES (?, ? ,?, ?)");//inserto a la tabla
    
    
                $query-> execute([$deudor,$cuota,$cuota_capital,$fecha_pago]);
                
            }
            mostrarTabla();
           
        }
       


    }
    subirDatosForm();

    