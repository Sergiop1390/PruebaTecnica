<?php
require_once("../Model/Empleados.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.-->

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../js/TablaEmpleado.js"></script>
    </head>
    <body>
        <div class="row justify-content-center">
            <h1>Lista de empleados</h1><br>
        </div>
        <table border="1" class="table">
            <thead class="thead-dark">
                <tr><!--Filas --> 
                    <th>ID</th><!--Columnas -->
                    <th>Fecha de ingreso</th>
                    <th>nombre</th>
                    <th>genero</th>
                    <th>descripcion</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                $empleado = new Empleados();
                $datos = $empleado->ConsulEmpleado();
                //echo json_encode($datos);
                foreach ($datos as $empleados) {
                    echo "<tr>";
                    echo "<th>".$empleados['id']."</th>";       
                    echo "<th>".$empleados['nombre']."</th>";
                    echo "<th>".$empleados['email']."</th>";
                    echo "<th>".$empleados['sexo']."</th>";
                    echo "<th>".$empleados['descripcion']."</th>";
                    echo "<th> <input type='button' class='btn btn-success' id='".$empleados['id']."' name='UpdateEmpleado' value='Atualizar Empleado'> </th>";
                    echo "<th> <input type='button' class='btn btn-danger' id='".$empleados['id']."' name='DeleteEmpleado' value='Eliminar Empleado'> </th>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <input type="button" class="btn btn-primary" name="CrearEmpleado" value="Crear Empleado">
        <div id="aaa"></div>  
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
