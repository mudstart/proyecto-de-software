<?php
      
    require("../login/verificar.php");
    verificar::user();
    
    require ('../Archivos.php');
    $archivo=new Codigo();

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Libros</title>
        <!--Archivos Css-->
        <?php $archivo->Archivos_css(); ?>
         <?php $archivo->Archivos_css(); ?>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                      <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded fixed-top" style="background-color:#171717">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <a class="navbar-brand" href="#"><b>Replública Digital</b></a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item"> <a class="nav-link" href="estudiante.php">Estudiante<span class="sr-only"></span></a> </li>
                        <li class="nav-item"><a class="nav-link" href="horario.php">Horario</a> </li>
                        <li class="nav-item active"> <a class="nav-link" href="libros.php">Libros</a> </li>
                        <li class="nav-item session"><a class="nav-link" href="nota.php">Notas</a> </li>
                    </ul>
                    <ul class="nav navbar-nav ml-auto">
                      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i><?php echo ''.' '.$_SESSION['usuario']['USER'];?></a>
            
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="#">Información</a>
          <a class="dropdown-item" href="#">Configuración</a>
          <a class="dropdown-item" href="../login/destruir.php">Cerrar sesión</a>
        </div>
      </li>
                    
                    
                        
                    </ul>
                </div>
            </nav>
     
                </div>
            </div>
        </div>
        
        <div class="container-fluid darle">
           
            <div class="row">
                <div class="col-md-4">
                    <div class="dropdown mt-4">
                       <span>Filtrar Por:</span> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Libros</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> 
                         <a class="dropdown-item" href="libros.php">General</a> 
                        <a class="dropdown-item" href="?tipo=Fisica">Fisica</a> 
                        <a class="dropdown-item" href="?tipo=Ciencia">Ciencia</a> 
                        <a class="dropdown-item" href="?tipo=Matematica">Matematica</a> 
                        <a class="dropdown-item" href="?tipo=Biologia">Biologia</a> 
                        <a class="dropdown-item" href="?tipo=Ecologia">Ecologia</a>
                        </div>
                    </div>
                </div>
                
           <!-- <div class="col-md-4 offset-md-4">
             <form class="form-inline" method="get" action="libros.php">
                   <label class="sr-only" for="inlineFormInput">Buscar</label>
                   <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="nombre" name="Nombre" placeholder="Buscar por Nombre">
                   
            <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
            
            </div>-->

              
                    
                    
                </div>
                
            </div>
        </div>
        
        <hr>
        <div class="container">
        <div class="card text-center z-depth-2" style="background: #0099cc;">
        <div class="card-block">
            <p  style="font-size: 2.3em; margin-top: 10px;" class="white-text display-4"> <?php if(isset($_GET['tipo'])){ echo $_GET['tipo'];}else{ echo "Libros En General";} ?></p>
        </div>
    </div>
               
            
    <hr>
            <div class="row">
                
<?php
      require '../controladores/conexion.php';   
      $base=conexion::conectar();
 try{
    
      
      $tamano_pagina=10;
     
       
      if(isset($_GET["pagina"])){
      
           if($_GET['pagina']==1){
                
               header("location:libros.php");
                
           }else{
               $pagina=$_GET['pagina'];
           }
           
      }else{
          $pagina=1;
      }
           
      
      $empezar_desde=($pagina-1)*$tamano_pagina;
     if(isset($_GET['tipo'])){
           $tipo=$_GET['tipo'];
          
          $sql_total="SELECT * FROM libro WHERE PORTADA=:tipo";
          $resultado=$base->prepare($sql_total);
          $resultado->execute(array(":tipo"=>$tipo));
         
     }elseif(isset($_GET["Nombre"])){
            $nombre=$_GET['Nombre'];
          
          $sql_total="SELECT * FROM libro WHERE nombre LIKE '%:nombre%'";
          $resultado=$base->prepare($sql_total);
          $resultado->execute(array(":nombre"=>$nombre));
         
         
     }else{
          $sql_total="SELECT * FROM libro";
         $resultado=$base->query($sql_total);
     }
     
      
      $num_fila=$resultado->rowCount();
      
      $toltal_paginas=ceil($num_fila/$tamano_pagina);
      
     
      $resultado->closeCursor();
      
      if(isset($_GET['tipo'])){
           $sql_limites="SELECT * FROM libro where PORTADA=:tipo LIMIT $empezar_desde,$tamano_pagina";
           $resultado=$base->prepare($sql_limites);
          $resultado->execute(array(":tipo"=>$_GET['tipo']));
          
      }elseif(isset($_GET['Nombre'])){
            $sql_limites="SELECT * FROM libro WHERE NOMBRE LIKE '%:nombre%' LIMIT $empezar_desde,$tamano_pagina";
           $resultado=$base->prepare($sql_limites);
          $resultado->execute(array(":nombre"=>$_GET['Nombre']));
          
      
     
      }else{
           $sql_limites="SELECT * FROM libro LIMIT $empezar_desde,$tamano_pagina";
           $resultado=$base->query($sql_limites);
      }
     
      
      
     
        echo '<br>';
      $img="../imges/portada.jpg" ;
       
        while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            $NOMBRE=$registro["NOMBRE"];
            $ENLACE=$registro["ENLACE"];
            $PAGINAS=$registro["PAGINAS"];
            $PORTADA=$registro["PORTADA"];
          
            echo '<div class="col-md-4">
                    <div class="card" style="width: 16rem;"> <a href='.$ENLACE.'><img class="card-img-top" src='.$img.' alt="Card image cap">
                        </a>
                        <div class="card-block">
                            <h6 class="card-title">'.$NOMBRE.'</h6>
                            <p class="card-text"><a href='.$ENLACE.' class="btn btn-success" target="_blank"> '.$PORTADA.'</a> </div>
                    </div>
                </div>';
          
      }
      
      echo '</div>';
      
     
 } catch (Exception $ex) {
     die("Error: " . $ex->getMessage());
     echo 'Linea del error '.$ex->getLine();
 }
        
        
 ?>
       
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <nav aria-label="...">
                        <ul class="pagination">
                      <?php
                     
                       for($i=1;$i<=$toltal_paginas;$i++){
        
                               //echo "<a href='?pagina=$i'>".$i."</a>  ";
                            if($pagina==$i){
                                 echo '<li class="page-item active"><a class="page-link" href="?pagina='.$i.'">'.$i.'</a></li>';
                            }else{
                                 echo '<li class="page-item"><a class="page-link" href="?pagina='.$i.'">'.$i.'</a></li>';
                            }
                              
        
                        }
                            
                     ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        

        
        <?php $archivo->footerPrimario();?>
        
        <!--Archivos Js-->
        <?php $archivo->Archivos_js(); ?>
    </body>

    </html>