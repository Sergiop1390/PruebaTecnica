$(document).ready(function () {
   
    $('input[name=CrearEmpleado]').click(function () {
        $(location).attr('href', 'CrearEmpleado.php');
    });
    
    $('input[name=UpdateEmpleado]').click(function () {
        
        var id_update = $(this).attr('id');
        //console.log(id_delete);
        $.ajax({
            url: "UpdateProductos.php",
            type: "POST",
            dataType: "json",
            data: { 
                id: id_update
                },
        }).done(function(info){
            $("#aaa").html(info);
            
        });
        location.reload();
        $(location).attr('href', 'UpdateProductos.php');
    });
    $('input[name=DeleteEmpleado]').click(function () {
        var id_delete = $(this).attr('id');
        //console.log(id_delete);
        $.ajax({
            url: "../Controller/EmpleadoController.php",
            type: "POST",
            dataType: "json",
            data: { 
                id: id_delete, 
                num: "4" 
                },
        }).done(function(info){
            $("#aaa").html(info);
            
        });
        location.reload();
    });

});

