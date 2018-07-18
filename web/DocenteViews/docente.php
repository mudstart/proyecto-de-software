<?php
     require("../login/verificar.php");
    verificar::profesor();


    require ('../Archivos.php');
    $archivo=new Codigo();

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Docente</title>
        <!--Archivos Css-->
        <?php $archivo->Archivos_css(); ?>
            <link rel="stylesheet" href="../css/datatables.min.css">
            <link rel="stylesheet" href="../css/jquery-ui.css"> 
            <link rel="stylesheet" href="../css/dataTables.jqueryui.min.css">     
     </head>

    <body>

       
       <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded fixed-top" style="background-color:#212121">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <a class="navbar-brand" href="#"><b>Replública Digital</b></a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                       
                 <li class="nav-item active"> <a class="nav-link active" href="docente.php">Profesor<span class="sr-only"></span></a> </li>
                 <li class="nav-item"> <a class="nav-link" href="calificaciones.php">Calificaciones</a></li>
                       
                </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>-<?php echo $_SESSION['profesor']['USER']?></a>
            
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#">Información</a>
          <a class="dropdown-item" href="#">Configuración</a>
          <a class="dropdown-item" href="../login/destruir.php">Cerrar sesión</a>
        </div>
      </li>
        
       </ul>
    </div>
     </nav>
           
             <div class="row darle" style="display: block; margin: 0 auto; margin-top: 10%; width: 90%">
                <div class="col-xs-12">
                    <div class="jumbotron jumbotron-fluid text-white" style="background: #0099cc;">
                        <div class="container">
                            <h1 style="font-size: 2.3em;" class="display-3 text-center">Horario</h1>
                        </div>
                    </div>
                </div>
            </div>
            
            <table id="docente" class="display" cellspacing="0" width="80%">
                <thead>
                    <tr>
                        <th>Profesor</th>
                        <th>Materia</th>
                        <th>Curso</th>
                        <th>Hora</th>
                        <th>Dia</th>
                    </tr>
                </thead>
            </table>
            <?php $archivo->footerPrimario();?>
                <!--Archivos Js-->
                <?php $archivo->Archivos_js(); ?>
                    <script src="../js/datatables.min.js"></script>
                    <script src="../js/dataTables.jqueryui.min.js"></script>
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
             
          $('#docente').DataTable({
                "destroy": true
                , "ajax": {
                    "method": "POST"
                    , "url": "../controladores/horariop.php"
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
                  "buttons":[
                        {
		                extend: 'excelHtml5',
		                text:   '<i class="fa fa-file-excel-o"></i>',
		                titleAttr: 'Excel'
		            },
                      
                     {
		                extend:    'csvHtml5',
		                text:      '<i class="fa fa-file-text-o"></i>',
		                titleAttr: 'CSV'
		            },
		            {
		                extend:    'pdfHtml5',
		                text:      '<i class="fa fa-file-pdf-o"></i>',
		                titleAttr: 'PDF'
		            }
                      
                  ]
              
            });
            
        });
                    
    </script>
    </body>

    </html>