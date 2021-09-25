<?php
include_once 'Conexion.php';
class Empleados {

    private $db;

    public function __construct() {
        $this->db = Conectar::conexion();
    }

    function ConsulEmpleado() {
        $sql = 'SELECT `id`,`nombre`, `email`, `sexo`, `area_id`, `boletin`, `descripcion` FROM `empleado`';
        //echo $sql;
        $result = $this->db->query($sql);
        $resArray = [];
        $i = 0;
        $num = mysqli_num_rows($result);
        //echo json_encode(mysqli_fetch_array($result));
        if ($num<1) {
            echo "No se hizo la consulta";
            return false;
        }else{
            while ($res = mysqli_fetch_array($result)) {
                $resArray[$i] = $res;
                $i++;
            }
            return $resArray;
        }
//        var_dump($resArray);
//        echo $num = mysqli_num_rows($result);
        
    }

    function InsertEmpleado($nombre, $email_empleado, $sexo, $area, $boletin, $descripcion) {
        $sql = 'INSERT INTO `empleado`(`nombre`, `email`, `sexo`, `area_id`, `boletin`, `descripcion`) VALUES ("'.$nombre.'","'.$email_empleado.'","'.$sexo.'",'.$area.','.$boletin.',"'.$descripcion.'");';
        //echo $sql;
        $result = $this->db->query($sql);
        if ($result) {
            echo "true";
        } else {
            echo "false";
        }
        //var_dump($result);
    }
    function InsertRol_Empleado($nombre, $email_empleado, $sexo, $area, $boletin, $descripcion, $rol) {
        $select = 'SELECT `id` FROM `empleado` WHERE `nombre` ="'.$nombre.'" AND`email`= "'.$email_empleado.'" AND `sexo` = "'.$sexo.'" AND `area_id` = '.$area.' AND `boletin` = '.$boletin.' AND `descripcion` = "'.$descripcion.'"';
        $result_select = $this->db->query($select);
        $resArray = [];
        $i = 0;
        $num = mysqli_num_rows($result_select);
        //echo json_encode(mysqli_fetch_array($result_select));
        if ($num<1) {
            echo "No se hizo la consulta";
            echo "false";
        }else{
            while ($res = mysqli_fetch_array($result_select)) {
                $resArray[$i] = $res;
                $i++;
            }
            echo json_encode($resArray);
        }
//        var_dump($resArray);
//        echo $num = mysqli_num_rows($result);

    }
    /*function UpdateEmpleado($id, $nombre, $fecha_ingre, $salario) {
        $sql = 'UPDATE `empleado` SET `nombre`= "'.$nombre.'",`fecha_ingre`="'.$fecha_ingre.'",'
                . '`salario`="'.$salario.'" WHERE id = '.$id.'';
        $result = $this->db->query($sql);
        if ($result) {
            echo 'yes';
        } else {
            echo 'Noup F ';
        }
    }*/
    function DeleteEmpleado($id) {
        $sql = 'DELETE FROM `empleado` WHERE id = '.$id.'';
        $result = $this->db->query($sql);
        if ($result) {
            echo 'yes';
        } else {
            echo 'Noup ';
        }
//        var_dump($result);
    }

}
