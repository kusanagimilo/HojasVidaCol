
<table class="table-bordered" id="tabla_admin_docentes" class="display" >
    <thead>
        <tr>

            <th>NOMBRE COMPLETO</th>
            <th>IDENTIFICACION</th>
            <th>FECHA NACIMIENTO</th>
            <th>ESTADO CIVIL</th>
            <th>CORREO</th>
            <th>TELEFONO</th>
            <th>DIRECCION</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>




<script>


    var json = GridDocentes();

    $(document).ready(function () {
        $('#tabla_admin_docentes').DataTable({
            data: json
        });
    });

</script>