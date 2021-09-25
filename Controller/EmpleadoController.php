<?php
require_once("../Model/Empleados.php");

$num = $_POST['num'];
switch ($num) {
    case 1: //insertar
        $nombre = $_POST['nombreP'];
        $email_empleado = $_POST['email_empleado'];
        $sexo = $_POST['sexo'];
        $area = $_POST['Area'];
        $descripcion = $_POST['descripcion'];
        $rol = $_POST['rol'];
        $boletin = $_POST['boletin'];
        $empleado = new Empleados();
        $empleado->InsertEmpleado($nombre, $email_empleado, $sexo, $area, $boletin, $descripcion);
        //$empleado->InsertRol_Empleado($nombre, $email_empleado, $sexo, $area, $boletin, $descripcion, $rol); no logré que insertara la relacion del empleado_rol
        break;
    case 2: //Consultar por ID
//        $id = $_POST['ide'];
//        $tienda = new Tienda();
//        $tienda->ConsulTiendaID($id);
//        echo "Aca deberia redireccionar con todo y datos a RegistroTienda.php";
//        include '../View/RegistroTienda.php';
        break;
    case 3://Actualizar
        $nombre = $_POST['nombreP'];
        $fecha_ingre = $_POST['fecha_ingre'];
        $salario = $_POST['salario'];
        $empleado = new Empleados();
        $empleado->UpdateEmpleado($nombre, $fecha_ingre, $salario);
        break;
    case 4://Delete
        $id = $_POST['id'];
        $empleado = new Empleados();
        $empleado->DeleteEmpleado($id);
        break;
    default:
        break;
}
?>
