/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function FormHojaVida() {

    var data;
    $.ajax({
        type: "POST",
        url: "lib/HojaVida/Vista/CrearHojaVida.php",
        async: false,
        success: function (retu) {
            data = retu;
        }
    });

    $("#cont_cod").html(data);
}

function DialogAdicionarExperiencia() {
    var data;

    $.ajax({
        type: "POST",
        url: 'lib/Forms/Vista/FormAddExperiencia.php',
        async: false,
        success: function (retu) {
            data = retu;
        }
    });

    $("#dialog_add_exp").html(data);
    $("#dialog_add_exp").dialog({
        width: '500',
        height: '500',
        title: 'Adicionar experiencia',
        modal: true,
        buttons: {
            "Cerrar": function ()
            {
                $("#dialog_add_exp").dialog('close');
                $("#dialog_add_exp").dialog('destroy');
                $("#dialog_add_exp").html("");
            }
        }
    });

}
function DialogAdicionarFormacion() {
    var data;

    $.ajax({
        type: "POST",
        url: 'lib/HojaVida/Vista/FormAddFormacion.php',
        async: false,
        success: function (retu) {
            data = retu;
        }
    });

    $("#dialog_add_formacion").html(data);
    $("#dialog_add_formacion").dialog({
        width: '500',
        height: '500',
        title: 'Adicionar formacion',
        position: {my: 'top', at: 'top+150'},
        draggable: false,
        resizable: false,
        modal: true,
        buttons: {
            "Cerrar": function ()
            {
                $("#dialog_add_formacion").dialog('close');
                $("#dialog_add_formacion").dialog('destroy');
                $("#dialog_add_formacion").html("");
            }
        }
    });

}

