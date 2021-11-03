// Login Page Flipbox control
$('.login-content [data-toggle="flip"]').click(function() {
  $('.login-box').toggleClass('flipped');
  return false;
});
$('#formLogin').submit(function(e){                         
    e.preventDefault(); 
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());
    if(usuario.length == "" || password.length == ""){
        Swal.fire({
          type: 'warning',
          title: 'Ingrese Usuario y/o Password',                          
        }); 
        return false;
    }else{    
        $.ajax({
          url:"Helpers/acceso.php",
          type:"POST",    
          datatype:"json",    
          data:  {usuario:usuario, password:password},    
          success: function(data) {
              //console.log(data);
              if(data == "null"){
                  Swal.fire({
                      type: 'error',
                      title: 'Usuario y/o Password incorrectas',                          
                    });                    
              }else{                  
                  Swal.fire({
                      type: 'success',                          
                      title: '¡Conexión exitosa!',                                                
                      confirmButtonColor: '#3085d6',                          
                      confirmButtonText: 'Ingresar'
                    }).then((result) => {
                      if (result.value) {
                          window.location.href = "Modelos/Dashboard/dashboard";                          
                      }
                    })                                                               
              }
           }
        });			            
    }
});