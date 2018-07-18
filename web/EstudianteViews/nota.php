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
        <title>Notas</title>
        <!--Archivos Css-->
        <link rel="stylesheet" href="../css/datatables.min.css">
        <link rel="stylesheet" href="../css/jquery-ui.css">
        <link rel="stylesheet" href="../css/dataTables.jqueryui.min.css">
        <?php $archivo->Archivos_css(); ?>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded fixed-top" style="background-color:#171717">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> <a class="navbar-brand" href="#"><b>Replública Digital</b></a>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item"> <a class="nav-link" href="estudiante.php">Estudiante<span class="sr-only"></span></a> </li>
                                <li class="nav-item"><a class="nav-link" href="horario.php">Horario</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="libros.php">Libros</a> </li>
                                <li class="nav-item active"><a class="nav-link" href="nota.php">Notas</a> </li>
                            </ul>
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i><?php echo ''.' '.$_SESSION['usuario']['USER'];?></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="#">Información</a>
          <a class="dropdown-item" href="#">Configuración</a>
          <a class="dropdown-item" href="../login/destruir.php">Cerrar sesión</a></div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container darle">
             <div class="row darle" style="display: block; margin: 0 auto; margin-top: 10%;">
                <div class="col-xs-12">
                    <div class="jumbotron jumbotron-fluid text-white" style="background: #0099cc;">
                        <div class="container">
                            <h1 style="font-size: 2.3em;" class="display-3 text-center">Datos del recinto</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-6">
                    <!-- <h1 style="font-size: 1.5em; text-align: center;">Curso</h1> -->
                </div>
            </div>
            
            
            <div class="row" style="margin-bottom: 10%;">
                <div class="col-md-12">
                    <table class="table table-bordered table table-bordered table-responsive table-hover">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Curso</th>
                                <th>Profesor</th>
                                <th>Asignatura</th>
                                <th>1ra</th>
                                <th>2da</th>
                                <th>3ra</th>
                                <th>4ta</th>
                                <th>5ta</th>
                                <th>CFP</th>
                                <th>1ra</th>
                                <th>2da</th>
                                <th>3ra</th>
                                <th>4ta</th>
                                <th>5ta</th>
                                <th>CFP_2</th>
                            </tr>
                        </thead>
                        <tbody>
                        
            <?php
include("../controladores/conexion.php");
$base=conexion::conectar();

  
 $id=$_SESSION['usuario']['ID_ESTUDIANTE'];

$query="SELECT E.NOMBRE ESTUDIANTE, CU.NOMBRE CURSO, CONCAT(P.NOMBRE, ' ', P.APELLIDO) PROFESOR, A.NOMBRE ASIGNATURA, C.P 1RA, C.S 2DA, C.T 3RA, C.C 4TA, C.Q 5TA, TRUNCATE((C.P + C.S + C.T + C.C + C.Q)/5, 2) CFP, C.P_2 1RA, C.S_2 2DA, C.T_2 3RA, C.C_2 4TA, C.Q_2 5TA, TRUNCATE((C.P_2 + C.S_2 + C.T_2 + C.C_2 + C.Q_2)/5, 2) CFP_2
FROM ESTUDIANTE E, CURSO CU, CUR_EST CE, ASIGNATURA A, CALIFICACION C, PROFESOR P
WHERE CU.ID_CURSO = CE.ID_CURSO AND CE.ID_ESTUDIANTE = E.ID_ESTUDIANTE AND E.ID_ESTUDIANTE = C.ID_ESTUDIANTE AND C.ID_ASIGNATURA = A.ID_ASIGNATURA AND  P.ID_PROFESOR = C.ID_PROFESOR AND E.ID_ESTUDIANTE = $id";


 $resultado=$base->query($query);

       while($data=$resultado->fetch(PDO::FETCH_ASSOC))
                {
                     
                          echo '<tr>
                                  <th>'.$data["CURSO"].'</th>
                                  <th>'.$data['PROFESOR'].'</th>  
                                  <th>'.$data['ASIGNATURA'].'</th>
                                  <th>'.$data['1RA'].'</th>
                                  <th>'.$data['2DA'].'</th>  
                                  <th>'.$data['3RA'].'</th>
                                  <th>'.$data['4TA'].'</th>
                                  <th>'.$data['5TA'].'</th>
                                  <th>'.$data['CFP'].'</th>
                                  <th>'.$data['1RA'].'</th>
                                  <th>'.$data['2DA'].'</th>  
                                  <th>'.$data['3RA'].'</th>
                                  <th>'.$data['4TA'].'</th>
                                  <th>'.$data['5TA'].'</th>
                                  <th>'.$data['CFP_2'].'</th>
                               
                            </tr>';
           
               }
     
    
      
       
       $resultado->closeCursor();
     


?> 
       
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php $archivo->footerPrimario();?>
            <!--Archivos Js-->
            <?php $archivo->Archivos_js(); ?>
    </body>

    </html>