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
        <title>Estudiantes</title>
        <!--Archivos Css-->
        <?php $archivo->Archivos_css(); ?>
    </head>

    <body>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded fixed-top" style="background: #171717;">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <a class="navbar-brand" href="#"><b>Replública Digital</b></a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active"> <a class="nav-link" href="estudiante.php">Estudiante<span class="sr-only"></span></a> </li>
                        <li class="nav-item"><a class="nav-link" href="horario.php">Horario</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="libros.php">Libros</a> </li>
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
           
        </div>-->
        <div class="container-fluid darle">
            <div class="row">
              
              <div class="col-md-12">
               <div class="card text-center">
                  <div class="card-header white-text" style="background: #0099cc;">
                      Informacion Básica
                   </div>
                     <div class="card-block">
                        <h4 style="font-size: 15px; margin: 0;" class="card-title"><span>Usuario: </span><?php echo $_SESSION['usuario']['USER']?></h4>
                        <p style="margin: 0;" class="card-text"><span><b>Nombre y Apellido: </b><?php echo $_SESSION['usuario']['NOMBRE'] . ' ' .$_SESSION['usuario']['APELLIDO']  ?></span></p><b>Tutor: </b>
                        <span class="text-primary"><?php echo $_SESSION['usuario']['TUTOR']?></span>
                          <p><b>Fecha de nacimiento:</b> <?php echo $_SESSION['usuario']['FECHA_NAC']?></p>
                      </div>
                   </div>
                  
              </div>
            </div>
        </div>
        <div class="container">
               <div class="row darle" style="display: block; margin: 0 auto; margin-top: 10%;">
                <div class="col-xs-12">
                    <div class="jumbotron jumbotron-fluid text-white" style="background: #0099cc;">
                        <div class="container">
                            <h1 style="font-size: 2.3em;" class="display-3 text-center">Noticias</h1>
                        </div>
                    </div>
                </div>
            </div>
                 <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;"> <img class="card-img-top" src="../imges/noticias.png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title text-primary">Pruebas Nacionales 2017</h4>
                            <p class="card-text">Las pruebas nacinales serán más fuerte que la del año pasado...</p> <a href="#" class="btn btn-dark-green">Leer mas</a> 
                             <br><small class="text-danger">12-5-2017</small>
                            </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;"> <img class="card-img-top" src="../imges/noticias.png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title text-primary">Evento planificado</h4>
                            <p class="card-text">El evento sera realizado en el salon de acto del planter A...</p> <a href="#" class="btn btn-dark-green">Leer mas</a> 
                             <br><small class="text-danger">11-5-2017</small>
                            </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;"> <img class="card-img-top" src="../imges/noticias.png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title text-primary">Dia de la independencia</h4>
                            <p class="card-text">El dia de las independencias debemos tener respecto a los hechos patrioticos</p> <a href="#" class="btn btn-dark-green">Leer mas</a> 
                             <br><small class="text-danger">10-5-2017</small>
                            </div>
                    </div>
                </div>
            </div>
        </div>
           <hr>
            <!--Archivos Js-->
     <?php $archivo->Archivos_js(); ?>
      <?php $archivo->footerPrimario();?>
    
    </body>

    </html>