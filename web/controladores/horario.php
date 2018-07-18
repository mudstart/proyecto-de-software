<?php

include("conexion.php");
$base=conexion::conectar();
  
 $id=$_SESSION['usuario']['ID_ESTUDIANTE'];
 
 
 
 $sql="SELECT CONCAT(E.NOMBRE, ' ', E.APELLIDO) ESTUDIANTE, A.NOMBRE, C.NOMBRE CURSO, CONCAT(DATE_FORMAT(CA.HORARIO, '%h:%i'), ' - ', DATE_FORMAT(CA.TERMINO, '%h:%i %p')) HORA, CA.DIA FROM ESTUDIANTE E, ASIGNATURA A, CURSO C, CUR_ASIG CA WHERE EXISTS "
         . "( SELECT * FROM CUR_EST CE, ASIG_PROF AP WHERE E.ID_ESTUDIANTE = CE.ID_ESTUDIANTE AND CE.ID_CURSO = C.ID_CURSO AND C.ID_CURSO = CA.ID_CURSO AND CA.ID_ASIGNATURA = A.ID_ASIGNATURA AND E.ID_ESTUDIANTE = $id AND CE.ESTADO = 'C' ORDER BY CA.DIA )";
             
            /*$resultado=$base->prepare($sql);
            
             $resultado->execute(array(":user"=>$usuario,":pass"=>$password));*/
       $resultado=$base->query($sql);     
       $lunes=array();
       $martes=array();
       $miercoles=array();
       $jueves=array();
       $viernes=array();
       $i=0;
       $a=0;
       $b=0;
       $h=0;
       $m=0;
        while($data=$resultado->fetch(PDO::FETCH_ASSOC)){
                                
                                 if($data["DIA"]=="Lu"){
                                    $lunes[$i]=$data["NOMBRE"];
                                     $i=$i+1;
                                 }
                                 
                                  if($data["DIA"]=="Ma"){
                                    $martes[$a]=$data["NOMBRE"];
                                     $a=$a+1;
                                 }
                                 
                                  if($data["DIA"]=="Mi"){
                                    $miercoles[$b]=$data["NOMBRE"];
                                     $b=$b+1;
                                 }
                                 
                                 if($data["DIA"]=="Ju"){
                                    $jueves[$h]=$data["NOMBRE"];
                                     $h=$h+1;
                                 }
                                 
                                  if($data["DIA"]=="Vi"){
                                    $viernes[$m]=$data["NOMBRE"];
                                     $m=$m+1;
                                 }
                                 
                                 
                                 
                                 
                                 
         }                       
?>
