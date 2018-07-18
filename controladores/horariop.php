<?php

include("conexion.php");
$base=conexion::conectar();
session_start();
$id_profesor=$_SESSION['profesor']['ID_PROFESOR'];
$id_recinto=$_SESSION['profesor']['ID_RECINTO'];

$query="SELECT P.ID_PROFESOR, CONCAT(P.NOMBRE, ' ', P.APELLIDO) PROFESOR, A.NOMBRE, C.NOMBRE CURSO, DATE_FORMAT(CA.HORARIO, '%h:%i %p') HORA, CA.DIA
FROM PROFESOR P, ASIGNATURA A, CURSO C, CUR_ASIG CA
WHERE EXISTS
(
    SELECT * FROM ASIG_PROF AP
    WHERE AP.ID_PROFESOR = P.ID_PROFESOR AND AP.ID_ASIGNATURA = A.ID_ASIGNATURA AND A.ID_ASIGNATURA = CA.ID_ASIGNATURA AND CA.ID_CURSO = C.ID_CURSO AND P.ID_PROFESOR = $id_profesor AND (P.ID_RECINTO = $id_recinto AND C.ID_RECINTO =$id_profesor)
    ORDER BY CA.CUR_ASIG
)";
     $resultado=$base->query($query);
     
       while($data=$resultado->fetch(PDO::FETCH_ASSOC))
       {
           $arreglo['data'][]=$data;
           
       }
       
       echo json_encode($arreglo);
       
       $resultado->closeCursor();
     
     
     
     
     
?>