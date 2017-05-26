<table  class="table table-bordered table-striped">
    <thead>
        <tr>
            <th colspan="2">
                Adicionar formacion
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Centro educativo</td>
            <td><input type="text" name="centro_educativo" id="centro_educativo" placeholder="Ingrese el centro educativo"></td>
        <tr>
        <tr>
            <td>Titulo obtenido</td>
            <td><input type="text" name="titulo_obt" id="titulo_obt" placeholder="Ingrese el titulo obtentido"></td>
        <tr>
        <tr>
            <td>Fecha graduacion</td>
            <td><input type="text" name="fecha_graduacion" id="fecha_graduacion"></td>
        <tr>

    </tbody>

</table> 
<script>
    $("#fecha_graduacion").datepicker({
        changeMonth: true,
        changeYear: true
    });
</script>
