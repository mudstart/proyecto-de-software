<?php

include("conexion.php");
$base=conexion::conectar();

session_start();
$id_profesor=$_SESSION["profesor"]["ID_PROFESOR"];
$recinto=$_SESSION["profesor"]["ID_RECINTO"];

     
     $query="SELECT E.ID_ESTUDIANTE,A.ID_ASIGNATURA,A.NOMBRE ASIGNATURA, E.NOMBRE ESTUDIANTE, C.NOMBRE GRUPO FROM CURSO C, ESTUDIANTE E, CUR_EST CE, ASIGNATURA A, CUR_ASIG CA, ASIG_PROF AP, PROFESOR P WHERE E.ID_ESTUDIANTE = CE.ID_ESTUDIANTE AND CE.ID_CURSO = C.ID_CURSO AND C.ID_CURSO = CA.ID_CURSO AND CA.ID_ASIGNATURA = A.ID_ASIGNATURA AND A.ID_ASIGNATURA = AP.ID_ASIGNATURA AND AP.ID_PROFESOR = P.ID_PROFESOR AND P.ID_PROFESOR = $id_profesor AND (P.ID_RECINTO =1 AND C.ID_RECINTO = 1 )
GROUP BY E.ID_ESTUDIANTE";
     $resultado=$base->query($query);
     
       while($data=$resultado->fetch(PDO::FETCH_ASSOC))
       {
           $arreglo['data'][]=$data;
           
       }
       
       echo json_encode($arreglo);
       
       $resultado->closeCursor();
     
     
     
     
     
?>