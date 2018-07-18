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
        <title>Conductas</title>
        <!--Archivos Css-->
        <?php $archivo->Archivos_css(); ?>
        <?php  $archivo->datatable_css();?>
        
        <!-- <script src="../tinymce/js/tinymce/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>-->
    </head>

    <body>
       
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded fixed-top" style="background-color:#171717">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <a class="navbar-brand" href="#">RD DIGITAL</a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                       
                 <li class="nav-item"> <a class="nav-link" href="director.php">Psicólogo<span class="sr-only"></span></a> </li>
                    <li class="nav-item active"> <a class="nav-link" href="conducta.php">Conducta Estudiantes</a></li>
                    </ul>
                    <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>-<?php echo  $_SESSION['director']['USER']; ?></a>
            
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Informacion</a>
          <a class="dropdown-item" href="#">Configuracion</a>
          <a class="dropdown-item" href="../login/destruir.php">Cerrar session</a>
        </div>
      </li>
                    </ul>
                </div>
            </nav>
           
             <div class="row darle" style="display: block; margin: 0 auto; margin-top: 10%; width: 90%;">
                <div class="col-xs-12">
                    <div class="jumbotron jumbotron-fluid text-white" style="background: #0099cc;">
                        <div class="container" style="text-align: center;">
                            <h1 style="font-size: 2.3em;" class="display-3 text-center">Redacción de conducta</h1>
                            <p>Los objetivos señalan las conductas que el docente espera que sus alumnos dominen al final de un lapso de tiempo determinado. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-inline">
                        <label class="sr-only" for="matricula">Matricula</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="matricula" name="matricula" placeholder="Matricula" readonly>
                       <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#data_estudiante" aria-expanded="false">Matricula</button>
                       <input type="hidden" id="id_estudiante" name="estudiante">
                    </form>
                </div>
            </div>
            
    <div class="container collapse" id="data_estudiante">
        <div class="row">
           <div class="col-md-7 offset-md-3">
        <table id="dt_estudiante" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                  <th>Matricula</th>
                <th></th>
            </tr>
        </thead>
    
    </table>
               
               
           </div>
            
        </div>
        
    </div>  
           
            
            <div class="row">
                
                <div class="col-md-12">
                    
                    <form action="" method="post">
                         <textarea rows="20" cols="60" name="conducta" id="conducta" style="margin-top: 0px; margin-bottom: 0px; height: 216px;"></textarea>
                          <hr>
                          <input type="button" class="btn btn-success" id="enviar" value="Enviar">
                          
                    </form>
                    
                     <div class="error alert alert-danger text-center" style="display:none" role="alert"> 
                           Introduzca todos los datos
                     </div>
                     
                       <div class="alert alert-success text-center" style="display:none" role="alert" id="bien"> 
                           Datos ingresados correctamente
                     </div>
                     
                        <div class="alert alert-danger text-center" style="display:none" role="alert" id="mal"> 
                           Error al  registrar los datos
                     </div>
                    
                </div>
                
            </div>
        </div>
        
        <?php $archivo->footerPrimario();?>
        
        <!--Archivos Js-->
        <?php $archivo->Archivos_js(); ?>
        <?php $archivo->datatable_js();?>
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
                    , "url": "../controladores/estudiante.php"
                }
                , "columns": [
                    {
                        "data": "ID_ESTUDIANTE"
                    }
                    , {
                        "data": "NOMBRE"
                    }
                    , {
                        "data": "APELLIDO"
                    }, {
                        "data": "USER"
                    }
                    ,{
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
                
                $("#id_estudiante").val(data.ID_ESTUDIANTE);
                $("#matricula").val(data.USER);
                
                  $("#data_estudiante").collapse('hide');
                
            });
        }
        
    
   
        
        $('#enviar').on("click",function(){
                
                var estudiante=$("#id_estudiante").val();
                var matricula=$("#matricula").val();
                var conducta=$("#conducta").val(); 
                 
                console.log(String(conducta));
                
                if(estudiante.length<1 || conducta.length<2 || conducta.length<2){
                  $('.error').slideDown('slow');
                    
                  setTimeout(function(){
                 $('.error').slideUp('slow');
                  },3000);
                }else{
                    $.ajax({
                    method: "POST",
                    url:"../controladores/conducta.php",
                    data:{"id_estudiante":estudiante,"matricula":matricula,"conducta":conducta}
                    
                }).done(function(info){
                     info=String(info);
            if(info=="1"){
                   $('#bien').slideDown('slow');
                    
                  setTimeout(function(){
                 $('#bien').slideUp('slow');
                  },3000);   
                
                var estudiante=$("#id_estudiante").val("");
                var matricula=$("#matricula").val("");
                var conducta=$("#conducta").val(""); 
                
                         
              }else{
                  $('#mal').slideDown('slow');
                    
                  setTimeout(function(){
                 $('#mal').slideUp('slow');
                  },3000);
                         
                }  
                   
                    
                });
                    
                    
                }
               
                
                
            });
               
    
                    
    </script>
        
         
    
    </body>

    </html>