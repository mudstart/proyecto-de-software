
 <?php
  
   class Codigo{
       
       function Archivos_css(){
             echo '
             <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
             <link rel="icon" type="image/png" href="../imges/Logos.png">
             <link rel="stylesheet" href="../css/bootstrap.min.css">
             <link rel="stylesheet" href="../css/font-awesome.min.css">
             <link rel="stylesheet" href="../css/estilosP.css">
             <link rel="stylesheet" href="../css/mdb.min.css">
             ';
             
       }
       
       function datatable_css()
       {
           echo '<link rel="stylesheet" href="../css/datatables.min.css">
          <link rel="stylesheet" href="../css/jquery-ui.css"> 
          <link rel="stylesheet" href="../css/dataTables.jqueryui.min.css">';
           
       }
       
       
       function  Archivos_js(){
                echo '<script src="../js/jquery.min.js"></script>
                  <script src="../js/tether.min.js"></script>
                 <script src="../js/bootstrap.min.js"></script>
                 <script src="../js/jsPersonal.js"></script>
                  <script src="../js/mdb.min.js"></script>';
       }
       
       
       function datatable_js()
       {
           echo '<script src="../js/datatables.min.js"></script>
                 <script src="../js/dataTables.jqueryui.min.js"></script>';
           
           
       }
       
       
       function navbar_estudiantes(){
       echo '    <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded fixed-top" style="background-color:#00897b">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <a class="navbar-brand" href="#"><b>Replública Digital</b></a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active"> <a class="nav-link" href="estudiante.php">Estudiante<span class="sr-only"></span></a> </li>
                        <li class="nav-item"><a class="nav-link" href="horario.php">Horario</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="libros.php">Libros</a> </li>
                        <li class="nav-item session"><a class="nav-link" href="nota.php">Notas</a> </li>
                    </ul>
                    <ul class="nav navbar-nav ml-auto">
                      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>-Usuario</a>
            
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="dropdown-item" href="#">Información</a>
          <a class="dropdown-item" href="#">Configuración</a>
          <a class="dropdown-item" href="../login/destruir.php">Cerrar sesión</a>
        </div>
      </li>
                    
                    
                        
                    </ul>
                </div>
            </nav>';
        
       }
       
    function navbar_secretaria(){
        
    echo '<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top" style="background-color:#171717">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><b>Replública Digital</b></a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
     <li class="nav-item"> <a class="nav-link active" href="registro.php">Registro<span class="sr-only"></span></a> </li>
     <li class="nav-item"> <a class="nav-link" href="secretaria.php">Consulta</a> </li>
     <li class="nav-item"> <a class="nav-link" href="reportes.php">Reportes</a> </li>
    </ul>
    
       <ul class="nav navbar-nav ml-auto">
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user" aria-hidden="true"></i>-Usuario
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="dropdown-item" href="#">Información</a>
          <a class="dropdown-item" href="#">Configuración</a>
          <a class="dropdown-item" href="../login/destruir.php">Cerrar sesión</a>
        </div>
      </li>
        
       </ul>
    
  </div>
</nav>';
   
       /* echo '<nav class="navbar navbar-toggleable-md navbar-inverse bg-faded fixed-top" style="background-color:#009688">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                
                       
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> </div>
                        </li>
                    </ul>
                 
                </div>
            </nav>';*/
        
       }
       
       
     function navbar_director(){
     
        echo ' <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded fixed-top" style="background-color:#171717">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <a class="navbar-brand" href="#"><b>Replública Digital</b></a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                       
                 <li class="nav-item"> <a class="nav-link active" href="director.php">Director<span class="sr-only"></span></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="conducta.php">Conducta Estudiantes</a></li>
                    </ul>
                    <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>-Usuario</a>
            
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="dropdown-item" href="#">Información</a>
          <a class="dropdown-item" href="#">Configuración</a>
          <a class="dropdown-item" href="../login/destruir.php">Cerrar sesión</a>
        </div>
      </li>
                    </ul>
                </div>
            </nav>';
        
       }
       
          function navbar_docente(){
         
              echo '<nav class="navbar navbar-toggleable-md navbar-inverse bg-faded fixed-top" style="background-color:#171717">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <a class="navbar-brand" href="#"><b>Replública Digital</b></a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                       
                 <li class="nav-item"> <a class="nav-link active" href="docente.php">Profesor<span class="sr-only"></span></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="asistencia.php">Asistencia</a></li>
                    <li class="nav-item"> <a class="nav-link" href="calificaciones.php">Calificaciones</a></li>
                       
                </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>-Usuario</a>
            
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#">Información</a>
          <a class="dropdown-item" href="#">Configuración</a>
          <a class="dropdown-item" href="../login/destruir.php">Cerrar sesión</a>
        </div>
      </li>
        
       </ul>
    </div>
     </nav>';
        
       }
       
       
       
       
       function footerPrimario(){
           echo 
        '<footer class="footer" style="background: #171717; padding-bottom: 20px; margin-top: 10%;">
		<div id="second-footer">
			<div id="pics">
				<img style="padding: 20px 0;" alt="logo" src="../imges/logo-nav.svg">
				<p style="text-align: center;">Tu plataforma virtual educativa.</p>
			</div>

			<div>
				<h4 class="title">Síguenos</h4>
				<ul>					
                    <li><a href="#"> <button type="button" class="btn btn-primary"><i class="fa fa-facebook left"></i> Facebook</button></a></li>
					<li><a href="#"> <button type="button" class="btn btn-primary"><i class="fa fa-twitter left"></i> Twitter</button></a></li>
					<li><a href="#"><button type="button" class="btn btn-danger"><i class="fa fa-youtube left"></i> Youtube</button></a></li>
				</ul>
			</div>

			<div>
				<h4 class="title">Informaciones</h4>
				<ul>
					<li><a href="nosotros.html">Sobre nosotros</a></li>
					<li><a href="#">Privacidad</a></li>
					<li><a href="#">Políticas</a></li>
					<li><a href="#">Restricciones</a></li>
					<li><a href="#">Ayuda</a></li>
				</ul>
			</div>

			<div>
                <h4 class="title"><b>Desarrolladores</b></h4>
                <ul>
                    <li><b style="color: #6dd2d2;">Randy G. Diloné</b></li>
                    <li><b style="color: #6dd2d2;">Luis M. Rodriguez</b></li>
                </ul>
            </div>
		</div>

		<div id="copyright">
			<p>© 2017 República Digital todos los derechos reservados. República Digital es una plataforma educativa registrada por MINERD.</p>
		</div>
	</footer>';
           
           
           
       }
   }

?>