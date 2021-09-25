$(document).ready(function () {
    function refrescar(){
        //Actualiza la página
        $(location).attr('href','TablaEmpleado.php');
      }
    $('#id_form').submit(function (e) {
        e.preventDefault();
        var data = $(this).serializeArray();
        console.log(data);
        $.ajax({
            url: '../Controller/EmpleadoController.php',
            type: "POST",
            dataType: "json",
            data: data
        })
        .done(function(info){
            $("#aaa").html('<div class="alert alert-success" role="alert"> Se ingresó el usuario</div>');
            setTimeout(refrescar,2500);
            
        })
        .fail(function(info){
            $("#aaa").html("no holaaaaa");
        })
    }).validate({
        debug: false,
        rules: {
            nombreP: "required",
            email_empleado: {
                required: true,
                email: true
                },    
            sexo: "required",
            Area: "required",
            descripcion: "required",
            boletin: "required",
            rol: "required"
        },
        messages:{
            nombreP: "Por favor diligencie su nombre",
            email_empleado: {
                required: "Por favor diligencie el email",
                email: "Ingrese un formato de correo correcto"
                },   
            sexo: "Seleccione alguna de la opciones",
            Area: "Seleccione alguna de las opciones",
            descripcion: "Diligencie el campo",
            boletin: "Seleccione las opciones",
            rol: "Selecciones una o más opciones"
        }


    });
    

});