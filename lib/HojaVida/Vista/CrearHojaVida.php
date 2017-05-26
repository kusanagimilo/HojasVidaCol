<div class="panel panel-info" >
    <div class="panel-heading">
        <div class="panel-title">Crear Hoja de vida</div>

    </div>
    <div class="panel-body">
        <br>
        <center>
            <table style="margin: 1% 1% 1% 1%;" class="table-striped">
                <tr>
                    <td>Ingrese la identificacion del docente</td>
                    <td><input type="text" placeholder="Identificacion docente"></td>
                </tr>
                <tr>
                    <td colspan="2">
                <center><input type="button" value="Buscar Docente" class="btn btn-default"></center>
                </td>

                </tr>
            </table>
        </center>
        <div style="margin: 1% 1% 1% 1%;" id="con_cod_hoja_v">
            <table  class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th colspan="2">Perfil profesional</th>
                    </tr>
                </thead>
                <tr>
                    <td>Cargo o titulo breve de su hoja de vida</td>
                    <td><input type="text" class="form-control" id="cargo" name="cargo" placeholder="Ej: Programador,etc." required></td>
                </tr>
                <tr>
                    <td>Descripción breve de su perfil profesional</td>
                    <td>
                        <textarea style="height: 150px;" class="form-control" id="perfil_pro" name="perfil_pro">
                        
                        </textarea>
                    </td>
                </tr>

            </table>

            <br>
            <br>
            <table  class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th colspan="6">
                            Experiencia profesional 
                            <input type="button" value="Agregar" class="btn btn-success">
                        </th>
                    </tr>
                    <tr>
                        <th>Empresa</th>
                        <th>Cargo</th>
                        <th>Area</th>
                        <th>Funcion</th>
                        <th>Fecha inicio</th>
                        <th>Fecha fin</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>

            </table>
            
            <br>
            <br>
            <table  class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th colspan="6">
                            Formacion
                            <input type="button" value="Agregar" class="btn btn-success">
                        </th>
                    </tr>
                    <tr>
                        <th>Centro educativo</th>
                        <th>Titulo obtenido</th>
                        <th>Fecha graduacion</th>
                       
                    </tr>
                </thead>
                <tbody>

                </tbody>

            </table>

        </div>
    </div>
</div>
