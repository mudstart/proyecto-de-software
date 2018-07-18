<?php
  require('conexion.php');  
  $base=conexion::conectar();

 session_start();
$id_profesor=$_SESSION["profesor"]["ID_PROFESOR"];

 $id_estudiante=$_POST['id_estudiante'];
 $id_asignatura=$_POST["id_asinatura"];
 $primer=$_POST["primer"];
 $segundo=$_POST["segundo"];
 $tercero=$_POST["tercero"];
 $cuarto=$_POST["cuarto"];
 $quinto=$_POST["quinto"];
 $id_accion=$_POST["id_accion"];

if($id_accion=="1"){
 $sql="INSERT INTO calificacion (ID_CALIFICACION, ID_PROFESOR, ID_ASIGNATURA, ID_ESTUDIANTE, P, S, T, C, Q, CFP_1, P_2, S_2, T_2, C_2, Q_2, CFP_2, CFA, PC) VALUES (NULL, :profesor,:asignatura,:estudiante,:p,:s,:t,:c,:q, 0, 0, 0, 0, 0, 0, 0, 0, 0);";



    $resultado=$base->prepare($sql);
$resultado->execute(array(":profesor"=>$id_profesor,":asignatura"=>$id_asignatura,":estudiante"=>$id_estudiante,":p"=>$primer,":s"=>$segundo,":t"=>$tercero,":c"=>$cuarto,":q"=>$quinto));

    if($resultado->rowCount()>0){
            
        echo "1"; 
   
  } else{
      
       echo "2";
  
   }


  $resultado->closeCursor();


}else{
    
   $sql="UPDATE calificacion SET P_2=:p2,S_2=:s2,T_2=:t2,C_2=:c2,Q_2=:q2 WHERE ID_PROFESOR=:profesor AND ID_ASIGNATURA=:asignatura AND ID_ESTUDIANTE=:id_estudiante;";
   $resultado=$base->prepare($sql);
$resultado->execute(array(":p2"=>$primer,":s2"=>$segundo,":t2"=>$tercero,":c2"=>$cuarto,":q2"=>$quinto,":profesor"=>$id_profesor,":asignatura"=>$id_asignatura,":id_estudiante"=>$id_estudiante));

    if($resultado->rowCount()>0){
            
        echo "1"; 
   
  } else{
      
       echo "2";
  
   }


  $resultado->closeCursor();
    
    
}
?>