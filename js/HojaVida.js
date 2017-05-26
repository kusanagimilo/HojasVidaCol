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



