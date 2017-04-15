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
class Usuario {

    public function CrearUsuario($data) {


        $id_usuario = count(file("../../Planos/Usuario.txt"));

        if ($id_usuario == 0) {
            $id_usuario = 1;
        }



        $file = fopen("../../Planos/Usuario.txt", "a");

        $linea_almacenamiento = $id_usuario . "|" . $data['nombres'] . "|" . $data['apellidos'] .
                "|" . $data['correo'] . "|" . $data['telefono'] . "|" . $data['rol'] . "|" . $data['clave'];

        $retorno = fwrite($file, $linea_almacenamiento . PHP_EOL);

        if ($retorno) {
            return "bien";
        } else {
            return "mal";
        }
    }

}
