$(document).ready(function(){

    $("#foto").on("change",function(){
    	var uploadFoto = document.getElementById("foto").value;
        var foto       = document.getElementById("foto").files;
        var nav = window.URL || window.webkitURL;
        var contactAlert = document.getElementById('form_alert');
        
        if(uploadFoto !='')
        {
            var type = foto[0].type;
            var name = foto[0].name;
            if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png')
            {
                contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';                        
                $("#img").remove();
                $(".delPhoto").addClass('notBlock');
                $('#foto').val('');
                return false;
            }else{  
                contactAlert.innerHTML='';
                $("#img").remove();
                $(".delPhoto").removeClass('notBlock');
                var objeto_url = nav.createObjectURL(this.files[0]);
                $(".prevPhoto").append("<img id='img' src="+objeto_url+">");
                $(".upimg label").remove();

            }
        }else{
         alert("No selecciono foto");
         $("#img").remove();
     }              
 });

    $('.delPhoto').click(function(){
    	$('#foto').val('');
    	$(".delPhoto").addClass('notBlock');
    	$("#img").remove();
        if ($("#foto_actual") && $("#foto_remove") ){
            $("#foto_remove").val('img_producto.jpg');
        }

    });
    
});


function agregarDatoRec(modelo,nro_partida,descripcion,proveedor,existencia,foto,usuario){

    cadena = "modelo=" + modelo +
    "&nro_partida=" + nro_partida +
    "&descripcion=" + descripcion +
    "&proveedor=" + proveedor +
    "&existencia=" + existencia +
    "&foto=" + foto +
    "&usuario=" + usuario;
    

    $.ajax({
        type:"POST",
        url:"Helpers/grabarReclamos.php",
        data:cadena,
        success: function(r){
            if(r == 1){
                alertify.success('Agregado con Exito <i class="far fa-thumbs-up"></i>');
                location.reload();

            }else{
                alertify.error('Error al Grabar <i class="fas fa-exclamation-circle"></i>');
            }
        }
    });
}