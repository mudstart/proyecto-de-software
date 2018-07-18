$(document).ready(function(){
    
    jQuery(document).on('submit','#form',function(event){
     event.preventDefault();
    
    
     jQuery.ajax({
         url: '../controladores/form.php',
         type:'POST',
         dataType:'text',
         data:$(this).serialize(),
         
         beforeSend: function(){
             $('.botonlg').val('Validando...');
         
     }
         
         
         
     })
     
     .done(function(respuesta){
            respuesta=String(respuesta);
           console.log(respuesta);
         
             if(respuesta=="1"){
                 
              $('.bien').slideDown('slow');
             
             setTimeout(function(){
                 $('.bien').slideUp('slow');
             },3000);
                 
                 
                 $("#nombre").val("");
                 $("#apellido").val("");
                 $("#usuario").val("");
                 $("#contra").val("")
                 $("#telefono").val("");
                 
                 
            
                    
             }else{
                 
                  $('.error').slideDown('slow');
             
             setTimeout(function(){
                 $('.error').slideUp('slow');
             },3000);
             
                 
             }
        
         
     })
     
     .fail(function(resp){
         console.log(resp.responseText);
     })
     
     .always(function(){
         console.log('Complete'); 
         $('.botonlg').val('Iniciar Sesion');
     });
   
    
    
    
});
    
    
    
    
    
    
});