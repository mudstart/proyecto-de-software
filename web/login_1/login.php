<?php
    require("../Archivos.php");
    
   $archivo= new Codigo();
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <!--Archivos Css-->
        <?php $archivo->Archivos_css(); ?>
    </head>

    <body>
        
 <?php

 
 if(isset($_POST["enviar"])) 
 {
    
  
  try{
      $base=new PDO('mysql:host=localhost;port=3307; dbname=prueba','root','3543');
      $base->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
      
      $sql="SELECT * FROM usuario WHERE usuario=:login";
      
      $resultado=$base->prepare($sql);
      $login=htmlentities($user=$_POST['user']);
      $password=  htmlentities( $pass=$_POST['pass']);
      
      $resultado->bindValue(":login",$login);
      //$resultado->bindValue(":password",$password);
      
      $resultado->execute();
      
      $numero_registro=$resultado->rowCount();
      
     /* while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
              
             
          
      }*/
      
       $registro=$resultado->fetch(PDO::FETCH_ASSOC);
        if(ppy($password,$registro['pass'])){
                   echo '<h1>El usuario coincide</h1>';
          }else{
              echo "<h1>Usuario no coiciden</h1>";
          }
      
      
      
      
      
     /* if($numero_registro!=0){
          
          session_start();
          $_SESSION['usuario']=$_POST["user"]; 
           //header("location:../EstudianteViews/estudiante.php");
      }else{
 
         //echo "<h2>No pude pasar!</h2>";
          
         echo 'Error.Usuario o contraseña incorrecto';
      }
      * 
      */
      
      
      
      
      
      
      
      
  } catch (Exception $ex) {
      die("Error ". $ex->getMessage());
  }
 
 }

?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills nav-justified bg-info">
                        <li class="nav-item"> <a class="nav-link active" href="#">Active</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Longer nav link</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Disabled</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                  <?php
                      if(!isset($_SESSION['usuario'])){
                          include("formulario.html");
                      }else{
                          echo 'Usuario'.$_SESSION['usuario'];
                      }
                    
                  
                  
                  ?>
             </div>
               
            </div>
            
        </div>
        <!--Archivos Js-->
        <?php $archivo->Archivos_js(); ?>
    </body>

    </html>