$(document).ready(function(){
    
    jQuery(document).on('submit','#form',function(event){
     event.preventDefault();
        
      var user=$("#form2").val();
      var contra=$("#form4").val();
      var profesion=$("#profesion").val();
        
     if(user<=1 && contra<=1){
         error();
         
     }else{
          datos(user,contra,profesion);
     }
           
         
        
    
        
        
    function datos(user,contra,profesion){
            
       
    
    
     jQuery.ajax({
         url: '../controladores/login-personal.php',
         type:'POST',
         dataType:'json',
         data:{'usuario':user,'password':contra,'profesion':profesion},
         
         beforeSend: function(){
             $('.botonlg').val('Validando...');
         
     }
         
         
         
     })
     
     
     .done(function(respuesta){
         console.log(respuesta);
         
          if(!respuesta.error){
             if(respuesta.tipo=='profesor'){
                 location.href='../DocenteViews/docente.php';
                 
             }else if(respuesta.tipo=='director'){
                 location.href='../DirectorViews/director.php';
                 
             }else if(respuesta.tipo=='secretaria'){
                   location.href='../SecretariaViews/registro.php';
             }
          
            }
         
         if(respuesta.error==true){
             
              $("#error").text("Datos ingresados no validos");
             $('.error').slideDown('slow');
             
             setTimeout(function(){
                 $('.error').slideUp('slow');
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