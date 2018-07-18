<?php

    require("../login/verificar.php");
    verificar::user();
    
    
    require("../Archivos.php");
    
   $archivo= new Codigo();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Horario</title>
        <!--Archivos css-->
        <?php  $archivo->Archivos_css();  ?>
          <link rel="stylesheet" href="../css/datatables.min.css">
          <link rel="stylesheet" href="../css/jquery-ui.css"> 
          <link rel="stylesheet" href="../css/dataTables.jqueryui.min.css">
          <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.13/b-1.2.4/b-html5-1.2.4/b-print-1.2.4/datatables.min.css"/>
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
                        <li class="nav-item active"><a class="nav-link" href="horario.php">Horario</a> </li>
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
                   
               </div>
           </div>
             <div class="row darle">
                <div class="col-xs-12">
                    <div class="jumbotron jumbotron-fluid  text-white" style="background: #0099cc;">
                       <div class="container">
                            <h1 style="font-size: 2.3em;" class="display-3 text-center">Horario</h1>
                        </div>
                </div>
            </div>
           
        </div>
        <div class="container darle">
         <div class="row">
         <div class="col-md-12">
           <?php require("../controladores/horario.php");?>
       
           <table class="table table-bordered table-responsive table-hover">
                <thead class="thead-inverse">
                    <tr>
                        <th>Dia</th>
                        <th>7:00/7:45 AM</th>
                        <th>7:45/8:30 AM</th>
                        <th>8:30/9:15 AM</th>
                        <th>9:15/10:00 AM</th>
                        <th>10:30/11:15 AM</th>
                        <th>11:15/12:00 AM</th>
                        <th>12:00/12:45 AM</th>
                    </tr>
                </thead>
                   <tbody>
                        <tr>
                           <td>Lunes</td> 
                   <?php for($c=0;$c<count($lunes);$c++){
                         echo  '<td>'.$lunes[$c].'</td>';
                     }?>
                        </tr>
                              
                         <tr>
                         
                           <td>Martes</td>  
                      <?php for($c=0;$c<count($lunes);$c++){
                         echo  '<td>'.$martes[$c].'</td>';
                       }?> 
                     
                           
                        
                        </tr>
                        
                         <tr>
                           <td>Miercoles</td>
                            <?php for($c=0;$c<count($lunes);$c++){
                         echo  '<td>'.$miercoles[$c].'</td>';
                       }?> 
                     
                        </tr>
                         <tr>
                           <td>Jueves</td>
                          <?php for($c=0;$c<count($lunes);$c++){
                         echo  '<td>'.$jueves[$c].'</td>';
                       }?> 
                        </tr>
                        
                         <tr>
                           <td>Viernes</td>
                            <?php for($c=0;$c<count($lunes);$c++){
                         echo  '<td>'.$viernes[$c].'</td>';
                       }?> 
                        </tr> 
                </tbody>
        </table> 
    </div>
        </div>
        </div>;
      
        
        <?php $archivo->footerPrimario();?>
        <!--Archivos Js-->
        <?php $archivo->Archivos_js(); ?>
          <script src="../js/datatables.min.js"></script>
            <script src="../js/dataTables.jqueryui.min.js"></script>
    </body>

    </html>