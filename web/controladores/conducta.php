<?php
  require('conexion.php');  
  $base=conexion::conectar();

 session_start();
 $id_director=$_SESSION["director"]["ID_DIRECTOR"];
  
  $id_estudiante=$_POST['id_estudiante'];
  $matricula=$_POST['matricula'];
  $conducta=$_POST["conducta"];




  
 $sql="INSERT INTO conducta (ID_CONDUCTA, ID_DIRECTOR, ID_ESTUDIANTE, DESCRIPCION) VALUES (NULL,:director,:estudiante,:conducta);";



    $resultado=$base->prepare($sql);
$resultado->execute(array(":director"=>$id_director,":estudiante"=>$id_estudiante,":conducta"=>$conducta));

    if($resultado->rowCount()>0){
            
        echo "1"; 
   
  } else{
      
       echo "2";
  
   }


  $resultado->closeCursor();


  
?>