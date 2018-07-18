<?php
     require("../login/verificar.php");
     verificar::secretaria();
     
    require ('../Archivos.php');
    $archivo=new Codigo();

?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
        <!--Archivos Css-->
        <?php $archivo->Archivos_css(); ?>
    </head>

    <body>
     
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top" style="background-color:#212121">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><b>Replública Digital</b></a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
     <li class="nav-item active"><a class="nav-link" href="registro.php">Registro<span class="sr-only"></span></a> </li>
     <li class="nav-item"> <a class="nav-link" href="reportes.php">Consulta</a> </li>
      <li class="nav-item"> <a class="nav-link" href="inscripcion.php">Inscripción</a> </li>
    </ul>
    
       <ul class="nav navbar-nav ml-auto">
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user" aria-hidden="true"></i><?php echo ''.' '.$_SESSION['secretaria']['USER'];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Información</a>
          <a class="dropdown-item" href="#">Configuración</a>
          <a class="dropdown-item" href="../login/destruir.php">Cerrar sesión</a>
        </div>
      </li>
        
       </ul>
    
  </div>
</nav>
      
            
        <div class="container">
              <div class="row darle" style="display: block; margin: 0 auto; margin-top: 10%;">
                <div class="col-xs-12">
                    <div class="jumbotron jumbotron-fluid text-white" style="background: #0099cc;">
                        <div class="container">
                            <h1 style="font-size: 2.3em;" class="display-3 text-center">Registro estudiantes</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 push-md-3">
                    <form style="text-align: center;" action="" method="post" id="form">
                        <div class="form-group md-form">
                            <input type="text" class="form-control" id="nombre" name="nombre" required> 
                            <label for="nombre">Nombre</label>
                           <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --> </div>
                        <div class="form-group md-form">
                            <input type="text" class="form-control" id="apellido" name="apellido" required> 
                             <label for="apellido">Apellido</label>
                        </div>
                        <div class="form-group">
                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_n" required> 
                        </div>
                         
                      <div class="form-group">
                          <label for="sexo">Sexo</label>
                          <select class="form-control" id="sexo" name="sexo" required>
                           <option>Masculino</option>
                           <option>Femenino</option>
                         </select>
                       </div>
                       
                        <div class="form-group">
                          <label for="tutor">Tutor</label>
                          <select class="form-control" id="tutor" name="tutor" required>
                           <option>Castillo Rosario</option>
                           <option>Pichardo Santana</option>
                           <option>Molina Cano</option>
                         </select>
                       </div>
                       
                     
                  <div class="form-group md-form">
                            <input type="tel"  class="form-control" id="telefono" name="telefono" required> 
                            <label for="telefono">Telefono</label>
                   </div>
                     
                   <div class="form-group">
                           <label for="usuario" class="text-danger">Usuario</label>
                            <input type="text"  class="form-control usuario" id="usuario" name="usuario" readonly> 
                            
                   </div>
                     
                    <div class="form-group">
                           <label for="contra" class="text-danger">Contraseña</label>
                            <input type="text"  class="form-control contra" id="contra" name="contra" readonly> 
                            
                   </div>
                     
                     
                 <div class="form-group">                 
                  <input role="button" type="submit" class="btn-primary botonlg" value="Enviar Datos"> 
                   </div>
               </form>
                </div>
               
            </div>
            
                 <div class="alert alert-success text-center bien" role="alert" style="display:none">
                      Usuario regístrado
               </div>
               
                <div class="alert alert-danger text-center error" role="alert" style="display:none">
                      Error al registrar el usuario
               </div>
        </div>
        
        
        <?php $archivo->footerPrimario();?>
        <!--Archivos Js-->
        <?php $archivo->Archivos_js(); ?>
        <script>
     $(document).ready(function(){
    $("#telefono").on({
    click: function(){
      usuario(); 
    }
    });
});
            
            
             function usuario(){
                 
                 var nombre=$("#nombre").val();
                 var apellido=$("#apellido").val();
                 var fecha_nacimiento=$("#fecha_nacimiento").val();
                 
                 var arr=nombre.split(" ");
                 var arrp=apellido.split(" ");

                 
               if(arr.length==1){
                 var nombre1=arr[0].charAt(0);
                   
               }else if(arr.length>1){
                   var nombre1=arr[0].charAt(0);
                   var nombre2=arr[1].charAt(0);
                   
              }       
               
             if(arrp.length==1){
                 var apellido1=arrp[0].charAt(0); 
             }else if(arrp.length>1){
                 
                 var apellido1=arrp[0].charAt(0);
                 var apellido2=arrp[1].charAt(0);  
             }
                 
                 
                var year=fecha_nacimiento.slice(2,4);
                var mes=fecha_nacimiento.slice(5,7);
                var dia=fecha_nacimiento.slice(8,10);
            
        
                 $("#usuario").val(nombre1+nombre2+apellido1+dia+mes+year+"0001");
                 $("#contra").val(Math.floor(Math.random() * 50000)+nombre1+year);
                 
                                  
         }
            
            
        </script>
        
        
        <script src="../js/form.js"></script>
        
        
    </body>

    </html>