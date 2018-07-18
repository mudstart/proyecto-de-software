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
     <li class="nav-item"> <a class="nav-link" href="reportes.php">Consulta</a> </li>
     <li class="nav-item active"> <a class="nav-link" href="inscripcion.php">Inscripción</a> </li>
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
                            <h1 style="font-size: 2.3em;" class="display-3 text-center">Inscripción</h1>
                        </div>
                    </div>
                </div>
            </div>
            
            
             <div class="error alert alert-danger text-center display-4" style="display:none" role="alert"> 
                           Seleccione el estudiante
                     </div>
                     
                       <div class="alert alert-success text-center display-4" style="display:none" role="alert" id="bien"> 
                           Datos ingresados correctamente
                     </div>
                     
                        <div class="alert alert-danger text-center display-4" style="display:none" role="alert" id="mal"> 
                           Error al  registrar los datos
                     </div>
            
        
            <div class="row">
                
                <div class=" col-md-6" id="data_estudiante">
                  <table id="dt_estudiante" class="display" cellspacing="0" width="100%">
                     <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>CURSO</th>
                        <th>ID_CURSO</th>
                        <th></th>
                    </tr>
                  </thead>
                 </table>   
                </div>
                </div>
            
            <!--Archivos Js-->
            <?php $archivo->Archivos_js(); ?>
                <script src="../js/datatables.min.js"></script>
                    <script src="../js/dataTables.jqueryui.min.js"></script>
         <script type="text/javascript" class="init">
        $(document).ready(function () {
              listar();
            
            });
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
    
        var listar = function () {
            
         var table=$('#dt_estudiante').DataTable({
                "destroy": true
                , "ajax": {
                    "method": "POST"
                    , "url": "../controladores/reportes.php"
                    , "data":{"accion":"4"}
                }
                , "columns": [
                    {
                        "data": "ID_ESTUDIANTE"
                    }
                    ,{
                        "data": "NOMBRE"
                    }
                    ,{
                        "data": "CURSO"
                          }
                    ,{
                        "data": "ID_CURSO"
                   
                    },
                    {
                        "defaultContent": "<button type='button' class='editar btn btn-success btn-sm'><i class='fa fa-plus-square'></i></button>"
                    }
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
            
             obtener_data_editar("#dt_estudiante tbody", table);
        }
        
        var obtener_data_editar = function (tbody, table) {
            $(tbody).on("click", "button.editar", function () {
                var data = table.row($(this).parents("tr")).data();
                var idusuario = $("#idusuario").val(data.id_estudiante)
                    , nombre = $("#cliente").val(data.nombre + ' ' + data.apellido);
                    //, apellidos = $("#apellidos").val(data.apellido);
                   // , direccion = $("#dni").val(data.Direccion);
        
                
                  insertar(data.ID_ESTUDIANTE,data.ID_CURSO);
                  $("#data_estudiante").collapse('hide');
                
            });
        }
        
        
         function insertar(id_estudiante,id_curso){
             
             
                console.log(id_estudiante);
                console.log(id_curso);
               
                
                
                if(id_estudiante.length<1 || id_curso.length<1){
                  $('.error').slideDown('slow');
                    
                  setTimeout(function(){
                 $('.error').slideUp('slow');
                  },3000);
                }else{
                    $.ajax({
                    method: "POST",
                    url:"../controladores/inscripcion.php",
                    data:{"id_estudiante":id_estudiante,"id_curso":id_curso}
                    
                }).done(function(info){
                     info=String(info);
            if(info=="1"){
                    listar();
                   $('#bien').slideDown('slow');
                    
                  setTimeout(function(){
                 $('#bien').slideUp('slow');
                  },3000);   
              }else{
                  $('#mal').slideDown('slow');
                    
                  setTimeout(function(){
                 $('#mal').slideUp('slow');
                  },3000);
                         
                }  
                   
                    
                });
                    
                    
                }
               
                
                
         }
               
    
        
    
              
    

               
    
                    
    </script>
    
     <?php $archivo->footerPrimario();?>
</div>
</body>
</html>