<?php
  require("conexion.php");
  session_start();

  $base=conexion::conectar();
  
  $usuario=$_POST['usuario'];
  $password=$_POST['password'];
  
   $sql="SELECT * FROM estudiante WHERE USER=:user AND PASS=:pass";
             
            $resultado=$base->prepare($sql);
            
            $resultado->execute(array(":user"=>$usuario,":pass"=>$password));
           
     
    if($resultado->rowCount()==1){
            
        $datos=$resultado->fetch(PDO::FETCH_ASSOC);
        $_SESSION['usuario']=$datos;
        echo json_encode(array('error'=>false,'tipo'=>'user'));   
        
   
  } else{
      
     echo json_encode(array('error'=>true));
  
   }


?>

