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

            $clave = hash('sha512', $data['clave']);

            $sql_inserta_usuario = "INSERT INTO usuario (nombres,apellidos,correo,telefono,rol,clave,estado) VALUES(
                                 '" . $data['nombres'] . "','" . $data['apellidos'] . "',
                                 '" . $data['correo'] . "','" . $data['telefono'] . "',
                                 '" . $data['rol'] . "','" . $clave . "','AC')";
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

    public function Login($data) {
        $obj_bd = new BD();
        $conexion_bd = $obj_bd->conectar();
        $clave = hash('sha512', $data['clave']);

        $sql = "SELECT * FROM usuario 
               WHERE correo = '" . htmlspecialchars($data['correo']) . "'
               AND clave = '" . $clave . "' ";



        $resul = mysqli_query($conexion_bd, $sql);
        $cont_us = mysqli_num_rows($resul);




        if ($cont_us > 0) {
            $arreglo_usuario = mysqli_fetch_array($resul);


            if ($arreglo_usuario['estado'] == 'AC') {

                if ($arreglo_usuario['correo'] == $data['correo'] && $arreglo_usuario['clave'] == $clave) {

                    session_start();
                    $_SESSION['usuario'] = $arreglo_usuario;

                    header('Location: ../../../Aplicacion.php');
                } else {
                    return 3;
                }
            } else {
                return 2;
            }
        } else {
            return 3;
        }
    }

}
