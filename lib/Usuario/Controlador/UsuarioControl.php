<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../Modelo/Usuario.php';
$obj_usuario = new Usuario();
$opcion = $_POST['opcion'];

if ($opcion == 'crear_usuario') {
    $resultado = $obj_usuario->CrearUsuario($_POST);
    echo $resultado;
}


if ($opcion == 'AdministrarUsuario') {
    $resultado = $obj_usuario->AdministrarUsuario($_POST);
    echo $resultado;
}
