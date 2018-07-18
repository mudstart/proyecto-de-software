<?php
  session_start();
  
  session_destroy();
  
  echo 'hola mundo';
  
 header("location:login.php");
  


?>
