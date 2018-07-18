<?php
  require('conexion.php');  
  $base=conexion::conectar();

  session_start();
  $id_recinto=$_SESSION['secretaria']['ID_RECINTO'];

  $accion=$_POST['accion'];

  
 if($accion=="1"){
      $query="SELECT * FROM estudiante";
      $resultado=$base->query($query);
     
       while($data=$resultado->fetch(PDO::FETCH_ASSOC))
       {
           $arreglo['data'][]=$data;
           
       }
       
       echo json_encode($arreglo);
       
       $resultado->closeCursor();
     
 }elseif($accion=="2"){
     
       $query="SELECT P.NOMBRE PROFESOR, A.NOMBRE ASIGNATURA, DATE_FORMAT(CA.HORARIO, '%h:%i %p') HORARIO, C.NOMBRE CURSO, R.NOMBRE RECINTO  FROM PROFESOR P, ASIG_PROF AP, ASIGNATURA A, CUR_ASIG CA, CURSO C, RECINTO R  WHERE P.ID_PROFESOR = AP.ID_PROFESOR AND AP.ID_ASIGNATURA = A.ID_ASIGNATURA AND A.ID_ASIGNATURA = CA.ID_ASIGNATURA AND CA.ID_CURSO = C.ID_CURSO AND C.ID_RECINTO = R.ID_RECINTO AND R.ID_RECINTO=$id_recinto";
      $resultado=$base->query($query);
     
       while($data=$resultado->fetch(PDO::FETCH_ASSOC))
       {
           $arreglo['data'][]=$data;
           
       }
       
       echo json_encode($arreglo);
       
       $resultado->closeCursor();
     
 }elseif($accion=="3"){
      $query="SELECT P.ID_PROFESOR, CONCAT(P.NOMBRE, ' ', P.APELLIDO) PROFESOR, A.NOMBRE, C.NOMBRE CURSO, DATE_FORMAT(CA.HORARIO, '%h:%i %p') HORA, CA.DIA
FROM PROFESOR P, ASIGNATURA A, CURSO C, CUR_ASIG CA
WHERE EXISTS
(
    SELECT * FROM ASIG_PROF AP
    WHERE AP.ID_PROFESOR = P.ID_PROFESOR AND AP.ID_ASIGNATURA = A.ID_ASIGNATURA AND A.ID_ASIGNATURA = CA.ID_ASIGNATURA AND CA.ID_CURSO = C.ID_CURSO AND C.ID_CURSO = 4 AND (C.ID_RECINTO = 2 AND P.ID_RECINTO = 2)
    ORDER BY CA.CUR_ASIG
)";
     
      $resultado=$base->query($query);
     
       while($data=$resultado->fetch(PDO::FETCH_ASSOC))
       {
           $arreglo['data'][]=$data;
           
       }
       
       echo json_encode($arreglo);
       
       $resultado->closeCursor();
     
     
 }elseif($accion=="4"){
         $query="SELECT E.ID_ESTUDIANTE, CONCAT(E.NOMBRE, ' ', E.APELLIDO) NOMBRE, C.NOMBRE CURSO,C.ID_CURSO FROM ESTUDIANTE E, CURSO C, CUR_EST CE, SECRETARIA S WHERE E.ID_ESTUDIANTE = CE.ID_ESTUDIANTE AND CE.ID_CURSO = C.ID_CURSO AND CE.ESTADO != 'C' AND (S.ID_RECINTO = $id_recinto AND C.ID_RECINTO = $id_recinto) AND C.ID_CURSO=$id_recinto";
     
      $resultado=$base->query($query);
     
       while($data=$resultado->fetch(PDO::FETCH_ASSOC))
       {
           $arreglo['data'][]=$data;
           
       }
       
       echo json_encode($arreglo);
       
       $resultado->closeCursor();
     
     
 }
      


?>