/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function FormCrearDocente() {

    var data;
    $.ajax({
        type: "POST",
        url: "lib/Docente/Vista/FormCrearDocente.php",
        async: false,
        success: function (retu) {
            data = retu;
        }
    });

    $("#cont_cod").html(data);
}

function CrearDocente() {
    var data;
    $.ajax({
        type: "POST",
        url: "lib/Docente/Controlador/DocenteController.php",
        async: false,
        data: {
            opcion: 'crear_docente',
            nombres: $("#nombres").val(),
            apellidos: $("#apellidos").val(),
            tipo_identificacion: $("#tipo_identificacion").val(),
            identificacion: $("#identificacion").val(),
            anio: $("#anio").val(),
            mes: $("#mes").val(),
            dia: $("#dia").val(),
            estado_civil: $("#estado_civil").val(),
            correo: $("#correo").val(),
            telefono: $("#telefono").val(),
            direccion: $("#direccion").val()

        },
        success: function (retu) {
            data = retu;
        }
    });

    if (data == 1) {
        alert("Se logro almacenar el docente");
        FormCrearDocente();
    } else {
        alert("Ocurrio Algun error al tratar de almacenar el docente");
    }
}

function AdministracionDocentes() {
    var data;
    $.ajax({
        type: "POST",
        url: "lib/Docente/Vista/AdministrarDocentes.php",
        async: false,
        success: function (retu) {
            data = retu;
        }
    });

    $("#cont_cod").html(data);
}

function GridDocentes() {
    var data;
    $.ajax({
        type: "POST",
        url: "lib/Docente/Controlador/DocenteController.php",
        async: false,
        dataType: 'json',
        data: {
            opcion: 'AdministrarDocentes'
        },
        success: function (retu) {
            data = retu;
        }
    });

    return data;


}
