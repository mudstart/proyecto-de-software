<?php
      
   require("verificar.php");
   verificar::login();
    
  
   require("../Archivos.php");
    
   $archivo= new Codigo();
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Login estudiantes</title>
        <!--Archivos Css-->
        <?php $archivo->Archivos_css(); ?>
    </head>

    <body>
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background: #0099cc;">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> 
            <a style="color: #fff;" class="navbar-brand" href="#"><b>República Digital</b></a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav"> 
                <a style="color: #fff;" class="nav-item nav-link" href="../Paginas Principal/index.html">Inicio<span class="sr-only">(current)</span></a> 
                <a style="color: #fff;" class="nav-item nav-link active" href="login.php">Login Estudiante</a> 
                <a style="color: #fff;" class="nav-item nav-link" href="login-personal.php">Login Personal Educación</a> 
                </div>
        </nav>
        </div>
        <div class="error alert alert-danger" style="display:none" role="alert"> <h3 id="error" class="text-center"></h3> </div>
         <div class="mal alert alert-danger display-4 text-center" style="display:none" role="alert">Datos inválidos</div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-5 offset-md-4">
                    <!--Form with header-->
                    <form class="card" id="form" style="margin-bottom: 20%;">
                        <div class="card-block">
                            <!--Header-->
                            <div class="form-header  info-color-dark">
                                <h3><i class="fa fa-lock"></i> Login estudiantes</h3> </div>
                            <!--Body-->
                            <div class="md-form"> <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="form2" class="form-control" name="usuario">
                                <label for="form2">Su usuario</label>
                            </div>
                            <div class="md-form"> <i class="fa fa-lock prefix"></i>
                                <input type="password" id="form4" class="form-control" name="password">
                                <label for="form4">Su contraseña</label>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn blue darken-4 botonlg" value="Iniciar sesión"> </div>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options">
                                <p>Olvidó <a href="#">su contraseña?</a></p>
                            </div>
                        </div>
                    </form>
                    <!-- <form action="comprobacion.php" method="post">
                        <div class="form-group">
                            <label for="user">Usuario</label>
                                <input type="text" class="form-control" id="user" name="user" placeholder="Usuario"> 
                        </div>
                        
                        <div class="form-group">
                            <label for="pass">Contraseña</label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña"> 
                            </div>
                     
                    
                        <div class="form-group ml-5">
                             <button type="submit" class="btn btn-primary">Iniciar</button>
                           
                        </div>
                    </form>-->
                </div>
            </div>
        </div>
        <?php $archivo->footerPrimario(); ?>
            <!--Archivos Js-->
            <?php $archivo->Archivos_js(); ?>
                <script src="../js/login.js"></script>
    </body>

    </html>