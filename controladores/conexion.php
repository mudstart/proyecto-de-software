<?php

class conexion{
    
 
          public static function  conectar(){
        
    
                    try{
                         $base=new PDO('mysql:host=localhost;port=3307; dbname=educacion','root','3543');

                         $base->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);

                         $base->exec("SET CHARACTER SET UTF8");


                    } catch (Exception $ex) {
                        die("Error: " . $ex->getMessage());
                        echo 'Linea del error '.$ex->getLine();
                    }
                    
                    return $base;
        }

 }

?>
