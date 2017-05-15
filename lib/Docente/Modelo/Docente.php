<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Docente
 *
 * @author JuanCamilo
 */
include_once '../../config/conexion.php';

class Docente {

    public function CrearDocente($data) {


        $obj_bd = new BD();

        $conexion_bd = $obj_bd->conectar();



        $fecha_nacimiento = $data['anio'] . "-" . $data['mes'] . "-" . $data['dia'];

        $sql_ingresar_docente = "INSERT INTO docente (nombres, apellidos,
                                 tipo_identificacion, identificacion, fecha_nacimiento, estado_civil, 
                                 telefono, direccion,correo) VALUES 
                                 ('" . $data['nombres'] . "', '" . $data['apellidos'] . "', '" . $data['tipo_identificacion'] . "',
                                  '" . $data['identificacion'] . "', '$fecha_nacimiento', '" . $data['estado_civil'] . "',
                                  '" . $data['telefono'] . "', '" . $data['direccion'] . "','" . $data['correo'] . "');";




        $resul_ingresa_docente = mysqli_query($conexion_bd, $sql_ingresar_docente);



        if ($resul_ingresa_docente) {

            return 1;
        } else {
            return 2;
        }
    }

    public function AdministrarDocentes() {

        $arreglo_retorno = array();

        $obj_bd = new BD();

        $conexion_bd = $obj_bd->conectar();


        $sql_admin_docentes = "SELECT * FROM docente";
        $resul_admin_docentes = mysqli_query($conexion_bd, $sql_admin_docentes);

        while ($value = mysqli_fetch_array($resul_admin_docentes)) {
            $arreglo_interior = array(utf8_encode($value['nombres']) . " " . utf8_encode($value['apellidos']),
                $value['identificacion'],
                $value['fecha_nacimiento'],
                $value['estado_civil'],
                $value['correo'],
                $value['telefono'],
                $value['direccion'],
                "<input type='button' value='Modificar' onclick='' class='btn btn-default'>
                <input type='button' value='Eliminar' onclick='' class='btn btn-default'>");
            array_push($arreglo_retorno, $arreglo_interior);
        }
        $json = json_encode($arreglo_retorno);

        return $json;
    }

}
