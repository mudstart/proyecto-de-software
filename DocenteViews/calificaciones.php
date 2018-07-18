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
                       
                 <li class="nav-item"> <a class="nav-link active" href="docente.php">Profesor<span class="sr-only"></span></a> </li>
                 <li class="nav-item active"> <a class="nav-link" href="calificaciones.php">Calificaciones</a></li>
                       
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
                            <h1 style="font-size: 2.3em;" class="display-3 text-center">Calificaciones</h1>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="container">
               
               <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#data_estudiante" aria-expanded="false">Agregar Estudiante</button>
                    
                    <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#primer" aria-expanded="false">Primer cuatrimestre</button>
                    
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#segundoid" aria-expanded="false">Segundo cuatrimestre</button>
                    
                </div>
                </div>
                
                <div class="row">
                
                <div class=" col-md-6  collapse" id="data_estudiante">
                  <table id="dt_estudiante" class="display" cellspacing="0" width="100%">
                     <thead>
                    <tr>
                        <th>ID_ESTUDIANTE</th>
                        <th>ID Materia</th>
                        <th>Materia</th>
                        <th>Curso</th>
                        <th>Hora</th>
                        <th>Dia</th>
                    </tr>
                  </thead>
                 </table>   
                </div>
                </div>
                
                </div>            
                
            </div>
            
                <div class="error alert alert-danger text-center display-4" style="display:none" role="alert"> 
                           Introduzca todos los datos
                     </div>
                     
                       <div class="alert alert-success text-center display-4" style="display:none" role="alert" id="bien"> 
                           Datos ingresados correctamente
                     </div>
                     
                        <div class="alert alert-danger text-center display-4" style="display:none" role="alert" id="mal"> 
                           Error al  registrar los datos
                     </div>
            
            
            
            <div class="container darle">
                            
                <div class="row">
                    <div class="col-md-12 collapse" id="primer">
                    <h4 class="text-center text-primary">Nota: Primer cuatrimestre</h4>
                    
                 <form class="form-inline">
                 
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
              <input type="text" class="form-control" id="estudiante" placeholder="estudiante">
              <input type="hidden" class="form-control" id="id_estudiante">
              <input type="hidden" class="form-control" id="id_asignatura">
            </div>

             <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon">P</div>
              <input type="number" class="form-control" id="pprimer" min="0" max="100">
            </div>

             <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon">S</div>
              <input type="number" class="form-control" id="ssegundo"  min="0" max="100">
            </div>
            
             <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon">T</div>
              <input type="number" class="form-control" id="tercero"  min="0" max="100">
            </div>
            
             <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon">C</div>
              <input type="number" class="form-control" id="cuarto" min="0" max="100">
            </div>
            
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon">Q</div>
              <input type="number" class="form-control" id="quinto"  min="0" max="100">
            </div>
            
            
            <button type="button" class="btn btn-primary" id="primero">Enviar</button>
         </form>
                        
            </div>
                    
                    
            </div>
               
            <div class="row">
                    <div class="col-md-12 collapse" id="segundoid">
                     <h4 class="text-center text-primary">Nota: Segundo cuatrimestre</h4>
                 <form class="form-inline">
                 
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
              <input type="text" class="form-control" id="estudiante2" placeholder="estudiante">
              <input type="hidden" class="form-control" id="id_estudiante2">
              <input type="hidden" class="form-control" id="id_asignatura2">
            </div>
                
             <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon">P</div>
              <input type="number" class="form-control" id="primer1" min="0" max="100">
            </div>

             <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon">S</div>
              <input type="number" class="form-control" id="segundo1" min="0" max="100">
            </div>
            
             <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon">T</div>
              <input type="number" class="form-control" id="tercero1" min="0" max="100">
            </div>
            
             <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon">C</div>
              <input type="number" class="form-control" id="cuarto1" min="0" max="100">
            </div>
            
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon">Q</div>
              <input type="number" class="form-control" id="quinto1" min="0" max="100">
            </div>
            
            
            <button type="button" class="btn btn-primary" id="segundoE">Enviar</button>
         </form>
                        
            </div>
                    
                    
            </div>
                
                
            </div>
            
            
            
            
            
            <?php $archivo->footerPrimario();?>
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
                    , "url": "../controladores/estudiante2.php"
                }
                , "columns": [
                    {
                        "data": "ID_ESTUDIANTE"
                    }
                    ,{
                        "data": "ID_ASIGNATURA"
                    }
                    ,{
                        "data": "ASIGNATURA"
                    }
                    , {
                        "data": "ESTUDIANTE"
                    }, {
                        "data": "GRUPO"
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
                
                $("#estudiante").val(data.ESTUDIANTE);
                $("#id_estudiante").val(data.ID_ESTUDIANTE);
                $("#id_asignatura").val(data.ID_ASIGNATURA);
                
                
                $("#estudiante2").val(data.ESTUDIANTE);
                $("#id_estudiante2").val(data.ID_ESTUDIANTE);
                $("#id_asignatura2").val(data.ID_ASIGNATURA);
                
                  $("#data_estudiante").collapse('hide');
                
            });
        }
        
    
   
        
     $('#primero').on("click",function(){
                
                var id_estudiante=$("#id_estudiante").val();
                var id_asignatura=$("#id_asignatura").val();
                var primer=$("#pprimer").val();
                var segundo=$("#ssegundo").val();
                var tercero=$("#tercero").val();
                var cuarto=$("#cuarto").val(); 
                var quinto=$("#quinto").val(); 
                 
                console.log(id_estudiante +" "+ primer+ " "+segundo+" " + tercero + " "+cuarto+ " " + quinto );
                
                if(id_estudiante.length<1 || primer.length<1 || segundo.length<1 || tercero.length<1 || cuarto.length<1 || quinto.length<1){
                  $('.error').slideDown('slow');
                    
                  setTimeout(function(){
                 $('.error').slideUp('slow');
                  },3000);
                }else{
                    $.ajax({
                    method: "POST",
                    url:"../controladores/notasp.php",
                    data:{"id_estudiante":id_estudiante,"id_asinatura":id_asignatura,"primer":primer,"segundo":segundo,"tercero":tercero,
                     "cuarto":cuarto,"quinto":quinto,"id_accion":"1"}
                    
                }).done(function(info){
                     info=String(info);
            if(info=="1"){
                   $('#bien').slideDown('slow');
                    
                  setTimeout(function(){
                 $('#bien').slideUp('slow');
                  },3000);   
                
                             $("#id_estudiante").val("");
                             $("#id_asignatura").val("");
                             $("#pprimer").val("");
                             $("#ssegundo").val("");
                             $("#tercero").val("");
                             $("#cuarto").val(""); 
                             $("#quinto").val(""); 
                         
              }else{
                  $('#mal').slideDown('slow');
                    
                  setTimeout(function(){
                 $('#mal').slideUp('slow');
                  },3000);
                         
                }  
                   
                    
                });
                    
                    
                }
               
                
                
            });
              
              
    
           
     $('#segundoE').on("click",function(){
                
                var id_estudiante=$("#id_estudiante2").val();
                var id_asignatura=$("#id_asignatura2").val();
                var primer=$("#primer1").val();
                var segundo=$("#segundo1").val();
                var tercero=$("#tercero1").val();
                var cuarto=$("#cuarto1").val(); 
                var quinto=$("#quinto1").val(); 
                 
                console.log(id_estudiante +" "+ primer+ " "+segundo+" " + tercero + " "+cuarto+ " " + quinto );
                
                if(id_estudiante.length<1 || primer.length<1 || segundo.length<1 || tercero.length<1 || cuarto.length<1 || quinto.length<1){
                  $('.error').slideDown('slow');
                    
                  setTimeout(function(){
                 $('.error').slideUp('slow');
                  },3000);
                }else{
                    $.ajax({
                    method: "POST",
                    url:"../controladores/notasp.php",
                    data:{"id_estudiante":id_estudiante,"id_asinatura":id_asignatura,"primer":primer,"segundo":segundo,"tercero":tercero,
                     "cuarto":cuarto,"quinto":quinto,"id_accion":"2"}
                    
                }).done(function(info){
                     info=String(info);
            if(info=="1"){
                   $('#bien').slideDown('slow');
                    
                  setTimeout(function(){
                 $('#bien').slideUp('slow');
                  },3000);   
                
                    $("#id_estudiante2").val("");
                    $("#id_asignatura2").val("");
                    $("#primer1").val("");
                    $("#segundo1").val("");
                    $("#tercero1").val("");
                    $("#cuarto1").val(""); 
                    $("#quinto1").val(""); 
                         
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