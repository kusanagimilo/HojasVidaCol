/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function FormCrearUsuario() {

    var data;
    $.ajax({
        type: "POST",
        url: "lib/Usuario/Vista/CrearUsuario.php",
        async: false,
        success: function (retu) {
            data = retu;
        }
    });

    $("#cont_cod").html(data);
}


function VerAdminUsuarios() {
    var data;
    $.ajax({
        type: "POST",
        url: "lib/Usuario/Vista/AdministrarUsuarios.php",
        async: false,
        success: function (retu) {
            data = retu;
        }
    });

    $("#cont_cod").html(data);
}