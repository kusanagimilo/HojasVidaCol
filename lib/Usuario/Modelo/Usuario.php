<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author JuanCamilo
 */
include_once '../../config/conexion.php';

class Usuario {

    public function CrearUsuario($data) {


        $obj_bd = new BD();
        $conexion_bd = $obj_bd->conectar();

        $sql_revisa_usuarios = "SELECT id_usuario FROM usuario WHERE correo = '" . $data['correo'] . "'";
        $resul_filas = mysqli_query($conexion_bd, $sql_revisa_usuarios);
        $filas = mysqli_num_rows($resul_filas);

        if ($filas > 0) {
            return 'existe';
        } else {
            $sql_inserta_usuario = "INSERT INTO usuario (nombres,apellidos,correo,telefono,rol,clave) VALUES(
                                 '" . $data['nombres'] . "','" . $data['apellidos'] . "',
                                 '" . $data['correo'] . "','" . $data['telefono'] . "',
                                 '" . $data['rol'] . "','" . $data['clave'] . "')";
            $resul = mysqli_query($conexion_bd, $sql_inserta_usuario);

            if ($resul) {
                return "bien";
            } else {
                return "mal";
            }
        }





//        $id_usuario = count(file("../../Planos/Usuario.txt")) + 1;
//
//        $file = fopen("../../Planos/Usuario.txt", "a");
//
//        $linea_almacenamiento = $id_usuario . "|" . $data['nombres'] . "|" . $data['apellidos'] .
//                "|" . $data['correo'] . "|" . $data['telefono'] . "|" . $data['rol'] . "|" . $data['clave'];
//
//        $retorno = fwrite($file, $linea_almacenamiento . PHP_EOL);
    }

    public function AdministrarUsuario() {

        $arreglo_retorno = array();

        $obj_bd = new BD();

        $conexion_bd = $obj_bd->conectar();


        $sql_admin_usuarios = "SELECT * FROM usuario";
        $resul_admin_usuarios = mysqli_query($conexion_bd, $sql_admin_usuarios);

        while ($value = mysqli_fetch_array($resul_admin_usuarios)) {
            $arreglo_interior = array(utf8_encode($value['nombres']) . " " . utf8_encode($value['apellidos']),
                $value['correo'],
                $value['telefono'],
                $value['rol'],
                "<input type='button' value='Modificar' onclick='' class='btn btn-default'>
                <input type='button' value='Eliminar' onclick='' class='btn btn-default'>");
            array_push($arreglo_retorno, $arreglo_interior);
        }
        $json = json_encode($arreglo_retorno);

        return $json;
    }

}
