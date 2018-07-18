<?php
include("conexion.php");
$base=conexion::conectar();

  
 $id=$_SESSION['usuario']['ID_ESTUDIANTE'];

$query="SELECT E.NOMBRE ESTUDIANTE, CU.NOMBRE CURSO, CONCAT(P.NOMBRE, ' ', P.APELLIDO) PROFESOR, A.NOMBRE ASIGNATURA, C.P 1RA, C.S 2DA, C.T 3RA, C.C 4TA, C.Q 5TA, TRUNCATE((C.P + C.S + C.T + C.C + C.Q)/5, 2) CFP, C.P_2 1RA, C.S_2 2DA, C.T_2 3RA, C.C_2 4TA, C.Q_2 5TA, TRUNCATE((C.P_2 + C.S_2 + C.T_2 + C.C_2 + C.Q_2)/5, 2) CFP_2
FROM ESTUDIANTE E, CURSO CU, CUR_EST CE, ASIGNATURA A, CALIFICACION C, PROFESOR P
WHERE CU.ID_CURSO = CE.ID_CURSO AND CE.ID_ESTUDIANTE = E.ID_ESTUDIANTE AND E.ID_ESTUDIANTE = C.ID_ESTUDIANTE AND C.ID_ASIGNATURA = A.ID_ASIGNATURA AND  P.ID_PROFESOR = C.ID_PROFESOR AND E.ID_ESTUDIANTE = 1";


 $resultado=$base->query($query);

       while($data=$resultado->fetch(PDO::FETCH_ASSOC))
                {
                     
                          echo '<tr>
                                  <th>'.$data["CURSO"].'</th>
                                  <th>'.$data['PROFESOR'].'</th>  
                                  <th>'.$data['ASIGNATURA'].'</th>
                                  <th>'.$data['1RA'].'</th>
                                  <th>'.$data['2DA'].'</th>  
                                  <th>'.$data['3RA'].'</th>
                                  <th>'.$data['4TA'].'</th>
                                  <th>'.$data['5TA'].'</th>
                                  <th>'.$data['CFP'].'</th>
                                  <th>'.$data['1RA'].'</th>
                                  <th>'.$data['2DA'].'</th>  
                                  <th>'.$data['3RA'].'</th>
                                  <th>'.$data['4TA'].'</th>
                                  <th>'.$data['5TA'].'</th>
                                  <th>'.$data['CFP_2'].'</th>
                               
                            </tr>';
           
               }
     
    
      
       
       $resultado->closeCursor();
     


?>