<script>
    $('#form_crea_docente').validate({
        rules: {
            nombres: {required: true},
            apellidos: {required: true},
            estado: {required: true},
            tipo_identificacion: {required: true},
            identificacion: {required: true},
            dia: {required: true},
            mes: {required: true},
            anio: {required: true},
            estado_civil: {required: true},
            correo: {required: true}
        },
        messages: {
            nombres: {required: 'Ingrese el nombre'},
            apellidos: {required: 'Ingrese el apellido'},
            estado: {required: true},
            tipo_identificacion: {required: 'Ingrese el tipo de identificacion'},
            identificacion: {required: 'Ingrese la identificacion'},
            dia: {required: 'seleccione el dia'},
            mes: {required: 'seleccione el mes'},
            anio: {required: 'seleccione el año'},
            estado_civil: {required: 'seleccione el estado civil'},
            correo: {required: 'Ingrese el correo'}


        },
        debug: true,
        invalidHandler: function () {

            alert('Hay información en el formulario sin diligenciar por favor completarla');
            return false;
        },
        submitHandler: function (form) {
            CrearDocente();
        }
    });
</script>
<?php $anio = date('Y');
?>
<div class="panel panel-info" >
    <div class="panel-heading">
        <div class="panel-title">Crear Docente</div>

    </div>
    <div class="panel-body">
        <form style="margin: 1% 1% 1% 1%;" class="form-horizontal" id="form_crea_docente"  role="form" >
            <br style="clear:both">



            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Nombres : </label>  
                <div class="col-md-7">
                    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Apellidos : </label>  
                <div class="col-md-7">
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Tipo identificacion : </label>  
                <div class="col-md-7">
                    <select class="form-control" id="tipo_identificacion" name="tipo_identificacion" >
                        <option value="">--Seleccione el tipo de identificacion--</option>
                        <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                        <option value="Cédula de extranjería">Cédula de extranjería</option>
                        <option value="Pasaporte">Pasaporte</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Numero identificacion : </label>  
                <div class="col-md-7">
                    <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Numero de identificacion" >
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Fecha nacimiento : </label>  
                <div class="col-md-7">

                    <select style="width: 22.33%;"  id="dia" name="dia">
                        <option value="">Seleccion el dia</option>
                        <?php
                        for ($index = 1; $index < 32; $index++) {
                            echo " <option value='$index'>$index</option>";
                        }
                        ?>
                    </select>
                    <select style="width: 33.33%;" id="mes" name="mes">
                        <option value="">Seleccion el mes</option>
                        <option value="1">Enero</option>
                        <option value="2">Febrero</option>
                        <option value="3">Marzo</option>
                        <option value="4">Abril</option>
                        <option value="5">Mayo</option>
                        <option value="6">Junio</option>
                        <option value="7">Julio</option>
                        <option value="8">Agosto</option>
                        <option value="9">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                    </select>

                    <select style="width: 33.33%;" id="anio" name="anio">
                        <option value="">Seleccion el año</option>
                        <?php
                        for ($index1 = 1920; $index1 < $anio + 1; $index1++) {
                            echo " <option value='$index1'>$index1</option>";
                        }
                        ?>
                    </select>

                </div>
            </div>




            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Estado civil : </label>  
                <div class="col-md-7">
                    <select class="form-control" id="estado_civil" name="estado_civil">

                        <option value="">--Seleccion estado civil--</option>
                        <option value="Soltero(a)">Soltero(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Separado(a)/Divorciado(a)">Separado(a)/Divorciado(a)</option>
                        <option value="Viudo(a)">Viudo(a)</option>

                    </select>
                </div>
            </div>



            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Correo : </label>  
                <div class="col-md-7">
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Telefono : </label>  
                <div class="col-md-7">
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Direccion domicilio : </label>  
                <div class="col-md-7">
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" >
                </div>
            </div>


            <div class="form-group">

                <div class="col-md-10">
                    <center>
                        <input type="submit" value="Crear usuario" class="btn btn-default" >

                    </center>
                </div>
            </div>


        </form>
    </div>
</div>
