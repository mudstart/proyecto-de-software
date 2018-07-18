<?php

class verificar {
  
    
    public static function user(){
        session_start();
    if(!isset($_SESSION['usuario'])){
        header("location:../login/login.php");
    }
    
        
        
    }
    
    public static function login(){
        session_start();
         if(isset($_SESSION['usuario'])){
             session_destroy();
         }
       
    }
    
    public static function login_p(){
        session_start();
        if(isset($_SESSION['profesor']) || isset($_SESSION['secretaria']) || isset($_SESSION['director'])){
            session_destroy();
        }
    }

    

    public static function  profesor(){
        session_start();
        if(!isset($_SESSION['profesor'])){
             header("location:../login/login-personal.php");
        }
        
    }
    
   public static function secretaria(){
        session_start();
        if(!isset($_SESSION['secretaria'])){
             header("location:../login/login-personal.php");
        }
        
    }
    
    
    public static function director(){
           session_start();
        if(!isset($_SESSION['director'])){
             header("location:../login/login-personal.php");
        }
        
    }
    
    public static function cerrar(){
       session_start();
       session_destroy();
      header("location:../Paginas Principal/index.html");
  
        
    }
    
    
    
    
}



?>
