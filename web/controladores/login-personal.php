<?php
  require("conexion.php");
  session_start();

  $base=conexion::conectar();
  
  $profesion=$_POST['profesion'];
  $usuario=$_POST['usuario'];
  $password=$_POST['password'];
  
  switch ($profesion){
      
  case 'profesor':
      profesor($usuario,$password,$base);
      break;
  case 'secretaria':
      secretaria($usuario,$password,$base);
      break;
  case 'director':
      director($usuario,$password,$base);
      break;
  
      
  }

  
  
  function profesor($user,$pass,$base){
      
      
   $sql="SELECT * FROM profesor WHERE USER=:user AND PASS=:pass";
             
            $resultado=$base->prepare($sql);
            
            $resultado->execute(array(":user"=>$user,":pass"=>$pass));
           
     
    if($resultado->rowCount()==1){
            
        $datos=$resultado->fetch(PDO::FETCH_ASSOC);
        $_SESSION['profesor']=$datos;
        echo json_encode(array('error'=>false,'tipo'=>'profesor'));
   
  } else{
      
     echo json_encode(array('error'=>true));
  
   }

      
  }
  
  
  function secretaria($user,$pass,$base){
      
          
   $sql="SELECT * FROM secretaria WHERE USER=:user AND PASS=:pass";
             
            $resultado=$base->prepare($sql);
            
            $resultado->execute(array(":user"=>$user,":pass"=>$pass));
           
     
    if($resultado->rowCount()==1){
            
        $datos=$resultado->fetch(PDO::FETCH_ASSOC);
        $_SESSION['secretaria']=$datos;
        echo json_encode(array('error'=>false,'tipo'=>'secretaria'));     
   
  } else{
      
     echo json_encode(array('error'=>true));
  
   }
      
  }
  
  function director($user,$pass,$base){
                
   $sql="SELECT * FROM director WHERE USER=:user AND PASS=:pass";
             
            $resultado=$base->prepare($sql);
            
            $resultado->execute(array(":user"=>$user,":pass"=>$pass));
           
     
    if($resultado->rowCount()==1){
            
        $datos=$resultado->fetch(PDO::FETCH_ASSOC);
        $_SESSION['director']=$datos;
        echo json_encode(array('error'=>false,'tipo'=>'director'));   
   
  } else{
      
     echo json_encode(array('error'=>true));
  
   }
      
      
  }




?>

