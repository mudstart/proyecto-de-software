<?php
    require("../login/verificar.php");
     verificar::secretaria();
     
    require ('../Archivos.php');
    $archivo=new Codigo();

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Reportes</title>
        <!--Archivos Css-->
        <?php $archivo->Archivos_css(); ?>
          <link rel="stylesheet" href="../css/datatables.min.css">
          <link rel="stylesheet" href="../css/jquery-ui.css"> 
          <link rel="stylesheet" href="../css/dataTables.jqueryui.min.css">
 
    </head>

    <body>
        <div class="container-fluid">
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top" style="background-color:#212121">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><b>Replública Digital</b></a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
     <li class="nav-item"><a class="nav-link" href="registro.php">Registro<span class="sr-only"></span></a> </li>
     <li class="nav-item active"> <a class="nav-link" href="reportes.php">Consulta</a> </li>
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
                <div class="row darle" style="display: block; margin: 0 auto; margin-top: 10%;">
                <div class="col-xs-12">
                    <div class="jumbotron jumbotron-fluid text-white" style="background: #0099cc;">
                        <div class="container">
                            <h1 style="font-size: 2.3em;" class="display-3 text-center">Datos Generales</h1>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-8 offset-md-4">
                     <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#data_estudiante" aria-expanded="false">Estudiantes</button> 
                     <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#data_horario" aria-expanded="false">Horario Profesores</button>
                      <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#data_inscrito" aria-expanded="false">Horario Aulas</button>
                    </div>
                </div>
                
            <div class="container collapse" id="data_estudiante">
                  <div class="row">
          <table id="estudiante" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Sexo</th>
                        <th>Fecha de nacimiento</th>
                        <th>Fecha inscripcion</th>
                        <th>Tutor</th>
                        <th>Telefono</th>
                        <th>Usuario</th>
                    </tr>
                </thead>
            </table>  
                  </div>
                
            </div>
            
            
        <div class="container collapse" id="data_horario">
                  <div class="row">
          <table id="horario" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Profesor</th>
                        <th>Asignatura</th>
                        <th>Hoarario</th>
                        <th>Curso</th>
                        <th>Recinto</th>
                    </tr>
                </thead>
            </table>  
                  </div>
                
            </div>
            
            
        <div class="container collapse" id="data_inscrito">
                  <div class="row">
          <table id="inscrito" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Recinto</th>
                        <th>Secretaria</th>
                        <th>ID</th>
                        <th>Curso</th>
                        <th>Inscripto</th>
                    </tr>
                </thead>
            </table>  
                  </div>
                
            </div>
        
            
            <!--Archivos Js-->
            <?php $archivo->Archivos_js(); ?>
                <script src="../js/datatables.min.js"></script>
                    <script src="../js/dataTables.jqueryui.min.js"></script>
                    <script src="../js/dataTables.buttons.min.js"></script>
                    <script src="../js/buttons.jqueryui.min.js"></script>   
                    <script src="../js/jszip.min.js"></script>
                    <script src="../js/pdfmake.min.js"></script>
                    <script src="../js/vfs_fonts.js"></script>
                    <script src="../js/buttons.html5.min.js"></script>
                    <script src="../js/buttons.print.min.js"></script>
                    <script type="text/javascript" class="init">
                        
        $(document).ready(function () {
             var idioma_espanol = {
            "sProcessing": "Procesando..."
            , "sLengthMenu": "Mostrar _MENU_ registros"
            , "sZeroRecords": "No se encontraron resultados"
            , "sEmptyTable": "Ningún dato disponible en esta tabla"
            , "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros"
            , "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros"
            , "sInfoFiltered": "(filtrado de un total de _MAX_ registros)"
            , "sInfoPostFix": ""
            , "sSearch": "Buscar:"
            , "sUrl": ""
            , "sInfoThousands": ","
            , "sLoadingRecords": "Cargando..."
            , "oPaginate": {
                "sFirst": "Primero"
                , "sLast": "Último"
                , "sNext": "Siguiente"
                , "sPrevious": "Anterior"
            }
            , "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente"
                , "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
             
          $('#estudiante').DataTable({
                "destroy": true
                , "ajax": {
                    "method": "POST"
                    , "url": "../controladores/reportes.php"
                    ,"data":{"accion":"1"}
                }
                , "columns": [
                    {
                        "data": "NOMBRE"
                    }
                    , {
                        "data": "APELLIDO"
                    }
                    , {
                        "data": "SEXO"
                    },{
                        
                        "data":"FECHA_NAC"
                    },{
                         "data":"FECHA_IN"
                    },{
                          "data":"TUTOR"
                    },{
                         "data":"TELEFONO"
                    },{
                        "data":"USER"
                    },

                        ]
                , "language":idioma_espanol,
             dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                     columns: ':contains("Office")'
                }
            },
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ]
              
            });
            
            
            $('#horario').DataTable({
                "destroy": true
                , "ajax": {
                    "method": "POST"
                    , "url": "../controladores/reportes.php"
                    ,"data":{"accion":"2"}
                }
                , "columns": [
                    {
                        "data": "PROFESOR"
                    }
                    , {
                        "data": "ASIGNATURA"
                    }
                    , {
                        "data": "HORARIO"
                    },{
                        
                        "data":"CURSO"
                    },{
                         "data":"RECINTO"
                    },

                        ]
                , "language":idioma_espanol,
                   dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                     columns: ':contains("Office")'
                }
            },
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ]
              
              
            });
            
            
                    
            $('#inscrito').DataTable({
                "destroy": true
                , "ajax": {
                    "method": "POST"
                    , "url": "../controladores/reportes.php"
                    ,"data":{"accion":"3"}
                }
                , "columns": [
                    {
                        "data": "PROFESOR"
                    }
                    , {
                        "data": "NOMBRE"
                    }
                    , {
                        "data": "CURSO"
                    },{
                        
                        "data":"HORA"
                    },{
                         "data":"DIA"
                    },

                        ]
                , "language":idioma_espanol,
               dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                     columns: ':contains("Office")'
                }
            },
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ]
              
              
            });
            
        });
                    
    </script>
    
     <?php $archivo->footerPrimario();?>
</div>
</body>
</html>