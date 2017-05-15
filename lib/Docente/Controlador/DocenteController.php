<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../Modelo/Docente.php';
$obj_docente = new Docente();
$opcion = $_POST['opcion'];

if ($opcion == 'crear_docente') {
    $resultado = $obj_docente->CrearDocente($_POST);
    echo $resultado;
}
if ($opcion == 'AdministrarDocentes') {
    $resultado = $obj_docente->AdministrarDocentes($_POST);
    echo $resultado;
}



