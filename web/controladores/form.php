<?php
  require('conexion.php');  
  $base=conexion::conectar();
  
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $fecha_n=$_POST['fecha_n'];
  $tutor=$_POST['tutor'];
  $sexo=$_POST['sexo'];
  $telefono=$_POST['telefono'];
  $usuario=$_POST['usuario'];
  $conta=$_POST['contra'];
  
 $sql="INSERT INTO estudiante (ID_ESTUDIANTE, NOMBRE, APELLIDO, SEXO, FECHA_NAC, FECHA_IN, TUTOR, TELEFONO, USER, PASS) VALUES (NULL,:nombre, :apellido,:sexo,:fecha,now(),:tutor,:telefono,:user,:pass)";



    $resultado=$base->prepare($sql);
$resultado->execute(array(":nombre"=>$nombre,":apellido"=>$apellido,
     ":sexo"=>$sexo,":fecha"=>$fecha_n,":tutor"=>$tutor,":telefono"=>$telefono,":user"=>$usuario,":pass"=>$conta));

    if($resultado->rowCount()>0){
            
        echo "1"; 
   
  } else{
      
       echo "2";
  
   }


  $resultado->closeCursor();


  
?>
