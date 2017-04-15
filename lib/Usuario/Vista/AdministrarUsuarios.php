<table id="tabla_admin_usuarios" class="display" >
    <thead>
        <tr>
            <th>ID USUARIO</th>
            <th>NOMBRE COMPLETO</th>
            <th>CORREO</th>
            <th>TELEFONO</th>
            <th>ROL</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $fp = fopen('../../Planos/Usuario.txt', 'r');




        $loop = 0;
        while (!feof($fp)) {
            $loop++;
            $line = fgets($fp);

            if ($line) {

                $field[$loop] = explode('|', $line);

                echo '<tr>
  <td>' . $field[$loop][0] . '</td>
  <td>' . $field[$loop][1] . ' ' . $field[$loop][2] . '</td>
  <td>' . $field[$loop][3] . '</td>
  <td>' . $field[$loop][4] . '</td>
  <td>' . $field[$loop][5] . '</td>
                      
      
                                    </tr>';
            }
            $fp++;
        }
        ?>
    </tbody>
</table>

<script>

    $(document).ready(function () {
        $('#tabla_admin_usuarios').DataTable();
    });

</script>