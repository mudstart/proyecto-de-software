$(document).ready(function(){
    
    jQuery(document).on('submit','#form',function(event){
     event.preventDefault();
        
      var user=$("#form2").val();
      var contra=$("#form4").val();
        
     if(user<1 && contra<1){
         error();
         
     }else{
          datos(user,contra);
     }
           
         
        
        
    

   function datos(user,contra){
       
 
     jQuery.ajax({
         url: '../controladores/login.php',
         type:'POST',
         dataType:'json',
         data:{'usuario':user,'password':contra},
         
         beforeSend: function(){
             $('.botonlg').val('Validando...');
         
     }
         
         
         
     })
     
     
     .done(function(respuesta){
         console.log(respuesta);
             
         if(!respuesta.error){
             if(respuesta.tipo=='user'){
                 location.href='../EstudianteViews/estudiante.php';   
             }
             
         }else{
             
             $('.mal').slideDown('slow');
             
             setTimeout(function(){
                 $('.mal').slideUp('slow');
             },3000);
             
                 $('.botonlg').val('Iniciar Sesion');
             
         }
             

             
             
             
         
         
     })
     
     .fail(function(resp){
         console.log(resp.responseText);
     })
     
     .always(function(){
         console.log('Complete'); 
     });
   
    
   }
        
  
    function error(){
        
          
            $("#error").text("No! Puede dejar las cacillas vacias");
      
             $('.error').slideDown('slow');
             
             setTimeout(function(){
                 $('.error').slideUp('slow');
             },3000);
             
                 $('.botonlg').val('Iniciar Sesion');
            
        }
    
});

    
    
    
    
    
});