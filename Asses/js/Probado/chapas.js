$(document).ready(function(){
    tablaChapas = $("#tabla_Chapas").DataTable({
       "columnDefs":[{
        "target": 1,
        "data":null,
       }],
        
        //Para cambiar el lenguaje a español
    "language": {
            "lengthMenu": "Filtar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscador:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
    
$("#btnNew").click(function(){
    $("#formChapas").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Registro Nuevo");            
    $("#modalChapas").modal("show");        
    id=null;
    opcion = 1; //alta
    });    
    
});