<?php
require_once("../Model/Areas.php");
require_once("../Model/Roles.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
        <script src="../js/registroEmpleados.js"></script>
        <title></title>
    </head>
    <body class="row justify-content-center">
        <div class="">
            <div class="">
                <h1>Registrar Empleado</h1><br>
            </div>
            <form id ="id_form"> 
                <div class="form-group row">
                    <div class="input-group-prepend row">
                        <label class="input-group-text" for="nombreP">Nombre</label>
                    </div>
                    <div class="">
                        <input type="text" class="form-control" id="nombreP" name="nombreP">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="input-group-prepend row">
                        <label class="input-group-text" for="email_empleado">Email</label>
                    </div>
                    <div class="">
                        <input type="email" class="form-control" id="email_empleado" name="email_empleado">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="input-group-prepend row">
                        <label class="input-group-text" for="sexo">Sexo</label>
                    </div>
                    <div class="">
                        <div class="form-check form-control">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="M">
                            <label class="form-check-label" for="sexo"> Masculino </label>
                        </div>
                        <div class="form-check form-control">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="F">
                            <label class="form-check-label" for="sexo"> Femenino </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="input-group-prepend row">
                        <label class="input-group-text" for="Area">Area</label>
                    </div>
                    <div class="">
                        <?php
                            $areas = new Areas();
                            $datos = $areas->ConsulArea();
                        ?>
                        <select name ="Area" id="Area" class="form-select form-select-lg form-control" aria-label=".form-select-lg example">
                            <option value = "" selected>Todas las areas</option>
                            <?php 
                                //echo json_encode($datos);
                                foreach ($datos as $area) {
                                    echo "<option value='".$area['id']."'>".$area['nombre']."</option>";
                                }
                            ?>
                            
                          </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="input-group-prepend row">
                        <label class="input-group-text" for="descripcion">Descripcion</label>
                    </div>
                    <div class="">
                        <textarea name="descripcion" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="input-group-prepend row">
                        <label class="input-group-text" for="rol">Deseo recibir boletín informativo</label>
                    </div>
                    <div class="">
                    <div class="form-check form-control">
                            <input class="form-check-input" type="radio" name="boletin" id="boletin" value="1">
                            <label class="form-check-label" for="sexo"> Si </label>
                        </div>
                        <div class="form-check form-control">
                            <input class="form-check-input" type="radio" name="boletin" id="boletin" value="0">
                            <label class="form-check-label" for="sexo"> No </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="input-group-prepend row">
                        <label class="input-group-text" for="rol">Roles</label>
                    </div>
                    <div class="">
                        <?php
                            $roles = new Roles();
                            $datos = $roles->ConsulRoles();
                            //echo json_encode($datos);
                            foreach ($datos as $rol) {
                        ?>
                        <div class="form-check form-control">
                            <input class="form-check-input" type="checkbox" name="rol[]" id="rol[]" value = "<?php echo $rol['id'];?>">
                            <label class="form-check-label" for="rol[]"> <?php echo $rol['nombre'];?> </label>
                        </div>
                        <?php }//aca se cierra el foreach?>
                    </div>
                </div>
                <div class="">
                    <div class="col-12">
                        <input type="submit" class="btn btn-primary" id="Crear_empleado" value="Enviar">
                    </div>
                </div>
                <input type="text" class="" id="num" name="num" value="1" hidden>
            </form>
            <div id ="aaa" class="form-group row">

            </div>
        </div>
        
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>