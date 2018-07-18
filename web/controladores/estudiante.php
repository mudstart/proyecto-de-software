<?php

include("conexion.php");
$base=conexion::conectar();
     
     $query="SELECT * FROM estudiante";
     $resultado=$base->query($query);
     
       while($data=$resultado->fetch(PDO::FETCH_ASSOC))
       {
           $arreglo['data'][]=$data;
           
       }
       
       echo json_encode($arreglo);
       
       $resultado->closeCursor();
     
     
     
     
     
?>