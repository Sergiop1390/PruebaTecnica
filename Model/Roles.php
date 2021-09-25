<?php
include_once 'Conexion.php';
class Roles {

    private $db;

    public function __construct() {
        $this->db = Conectar::conexion();
    }

    function ConsulRoles() {
        $sql = 'SELECT `id`,`nombre` FROM `roles`';
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

}
