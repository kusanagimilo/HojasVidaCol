<form role="form" method="POST" action="lib/Usuario/Controlador/UsuarioControl.php">
    <br style="clear:both">
    <h3 style="margin-bottom: 25px; text-align: center;">Crear usuario</h3>
    <div class="form-group">
        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
    </div>
    <div class="form-group">
        <select class="form-control" id="rol" name="rol" required>
            <option value="">--Seleccione el rol--</option>
            <option value="Administrador">Administrador</option>
            <option value="Operario">Operario</option>
            <option value="Visualizador">Visualizador</option>
        </select>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" id="clave" name="clave" placeholder="Clave" required>
    </div>
    <input type="submit" value="Crear usuario" class="btn btn-default" >
    <input type="hidden" value="crear_usuario" id="opcion" name="opcion">

</form>