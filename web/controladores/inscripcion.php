<?php
  require('conexion.php');  
  $base=conexion::conectar();

 session_start();
$id_secretaria=$_SESSION["secretaria"]["ID_SECRETARIA"];

 $id_estudiante=$_POST['id_estudiante'];
 $id_curso=$_POST["id_curso"];


  $sql="UPDATE cur_est SET id_curso = 2,estado='C' WHERE ID_ESTUDIANTE = :id_estu";
    $resultado=$base->prepare($sql);
$resultado->execute(array(":id_estu"=>$id_estudiante));

 if($resultado->rowCount()>0){
            
        echo "1"; 
   
  } else{
      
       echo "2";
  
   }


  $resultado->closeCursor();

 /*$sql="INSERT INTO cur_est (CUR_EST, ID_CURSO, ID_ESTUDIANTE, ID_SECRETARIA, FECHA_INSC, ESTADO) VALUES (NULL,2,:ide,:idse,now(), 'C');";*/



//    $resultado=$base->prepare($sql);
//$resultado->execute(array(":ide"=>$id_estudiante,":idse"=>$id_secretaria));
//
//    if($resultado->rowCount()>0){
//            
//        echo "1"; 
//   
//  } else{
//      
//       echo "2";
//  
//   }
//
//
//  $resultado->closeCursor();


?>