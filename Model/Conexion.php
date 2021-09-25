<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "prueba_tecnica_dev");
        $conexion->query("SET NAMES 'utf8'");
        //echo $conexion->host_info . "\n";
        return $conexion;
    }

}


    
    


