<?php

 
  
  
  try{
      $base=new PDO('mysql:host=localhost;port=3307; dbname=prueba','root','3543');
      $base->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
      
      $sql="SELECT * FROM usuario WHERE usuario=:login AND pass=:password";
      
      $resultado=$base->prepare($sql);
      $login=htmlentities($user=$_POST['user']);
      $password=  htmlentities( $pass=$_POST['pass']);
      
      $resultado->bindValue(":login",$login);
      $resultado->bindValue(":password",$password);
      
      $resultado->execute();
      
      $numero_registro=$resultado->rowCount();
      
      
      
      if($numero_registro!=0){
          
          session_start();
          $_SESSION['usuario']=$_POST["user"]; 
           header("location:../EstudianteViews/estudiante.php");
      }else{
 
         echo "<h2>No pude pasar!</h2>";
      }
      
      
      
      
      
      
      
      
  } catch (Exception $ex) {
      die("Error ". $ex->getMessage());
  }
 
 

?>