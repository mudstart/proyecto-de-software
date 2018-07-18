<?php

 try{
     
      $base=new PDO('mysql:host=localhost;port=3307; dbname=prueba','root','3543');
      
      $base->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
      
      $base->exec("SET CHARACTER SET UTF8");
      
      $tamano_pagina=10;
      
       
      if(isset($_GET["pagina"])){
      
           if($_GET['pagina']==1){
                
               header("Location:index.php");
                
           }else{
               $pagina=$_GET['pagina'];
           }
           
      }else{
          $pagina=1;
      }
           
      
      $empezar_desde=($pagina-1)*$tamano_pagina;
      $sql_total="SELECT * FROM DATOS_USUARIOS";
      
      $resultado=$base->query($sql_total);
      $num_fila=$resultado->rowCount();
      
      $toltal_paginas=ceil($num_fila/$tamano_pagina);
      
      echo "Numero de regiitro de la consulta: ".$num_fila."<br>";
      echo 'Motramos: '.$tamano_pagina." registros por paginas <br>";
      echo 'Mostrando la pagina '. $pagina. " de ". $toltal_paginas. "<br>";
      
      
      
   /*   while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
          
             echo "Nombre: ".$registro['Nombre']."<br>";
             echo "Apellido: ".$registro['Apellido']."<br>";
             echo "Direccion: ".$registro['Direccion']."<br>";
             
             echo '<br>';
          
      }*/
      
      $resultado->closeCursor();
      
      
      $sql_limites="SELECT * FROM DATOS_USUARIOS LIMIT $empezar_desde,$tamano_pagina";
      
       $resultado=$base->query($sql_limites);
     
        echo '<br>';
       
        while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
          
             echo "Nombre: ".$registro['Nombre']."<br>";
             echo "Apellido: ".$registro['Apellido']."<br>";
             echo "Direccion: ".$registro['Direccion']."<br>";
             
             echo '<br>';
          
      }
      
     
 } catch (Exception $ex) {
     die("Error: " . $ex->getMessage());
     echo 'Linea del error '.$ex->getLine();
 }
 
 
  //----------------------------------Paginación---------------------------------
 
 
    for($i=1;$i<=$toltal_paginas;$i++){
        
        echo "<a href='?pagina=$i'>".$i."</a>  ";
        
    }



 




?>
