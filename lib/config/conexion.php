<?php

include 'config.php';

class BD {

    public function conectar() {
        $conexion = mysqli_connect(DNS, USUARIO, PASSWORD) or die(mysqli_error());
//mysql_query("SET NAMES 'utf8' ") or die("Error de cotejamiento");
        mysqli_select_db($conexion, BD) or die("error de conexion");
        return $conexion;
    }

}
