<?php
   require("../login/verificar.php");
   verificar::director(); 
   
    require ('../Archivos.php');
    $archivo=new Codigo();

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <!--Archivos Css-->
        <?php $archivo->Archivos_css(); ?>
    </head>

    <body>
        <div class="container-fluid">
             <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded fixed-top" style="background-color:#171717">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <a class="navbar-brand" href="#"><b>Replública Digital</b></a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                       
                 <li class="nav-item active"> <a class="nav-link" href="director.php">Psicólogo<span class="sr-only"></span></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="conducta.php">Conducta Estudiantes</a></li>
                    </ul>
                    <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i><?php echo ''.' '.$_SESSION['director']['USER']; ?></a>
            
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="#">Información</a>
          <a class="dropdown-item" href="#">Configuración</a>
          <a class="dropdown-item" href="../login/destruir.php">Cerrar sesión</a>
        </div>
      </li>
                    </ul>
                </div>
            </nav>
            <div class="row darle" style="display: block; margin: 0 auto; margin-top: 10%;">
                <div class="col-xs-12">
                    <div class="jumbotron jumbotron-fluid text-white" style="background: #0099cc;">
                        <div class="container">
                            <h1 style="font-size: 2.3em;" class="display-3 text-center">Sección principal</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
               <div class="row darle" style="display: block; margin: 0 auto; margin-top: 10%;">
                <div class="col-xs-12">
                    <div class="jumbotron jumbotron-fluid text-white" style="background: #0099cc;">
                        <div class="container" style="text-align: center;">
                            <h1 style="font-size: 2.3em;" class="display-3 text-center">Métodos de evaluación de conducta</h1>
                            <p>El análisis conductual aplicado es el empleo de los principios de la psicología del aprendizaje, fundamentalmente del aprendizaje operante, a la modificación de comportamientos humanos de importancia. Los analistas del comportamiento se centran en la relación observable entre el comportamiento y el entorno.</p>
                        </div>
                    </div>
                </div>
            </div>
                 <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;"> <img class="card-img-top" src="../imges/mente.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title text-primary">Nuevos métodos</h4>
                            <p class="card-text">Los cientificos han descuvierto un manera...</p> <a href="#" class="btn btn-dark-green">Leer mas</a> 
                             <br><small class="text-danger">12-5-2017</small>
                            </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;"> <img class="card-img-top" src="../imges/mente.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title text-primary">Influencia positiva</h4>
                            <p class="card-text">Se ha demostrado que las emociones positivas ayudan a las personas...</p> <a href="#" class="btn btn-dark-green">Leer mas</a> 
                             <br><small class="text-danger">11-5-2017</small>
                            </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;"> <img class="card-img-top" src="../imges/mente.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title text-primary">Control emocional en los adolecentes</h4>
                            <p class="card-text">Las investigaciones concluyen que los adolecentes sufren de cambios repentino en las emociones...</p> <a href="#" class="btn btn-dark-green">Leer mas</a> 
                             <br><small class="text-danger">10-5-2017</small>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php $archivo->footerPrimario();?>
        <!--Archivos Js-->
        <?php $archivo->Archivos_js(); ?>
    </body>

    </html>