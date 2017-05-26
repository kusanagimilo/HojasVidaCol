<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
$usuario = $_SESSION['usuario'];

if ($usuario['correo'] != NULL || $usuario['correo'] != '') {
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Hojas de vida prof</title>
            <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.css" type="text/css">
            <link rel="stylesheet" href="css/app.css" type="text/css">
            <link rel="stylesheet" href="css/menu.css" type="text/css">
            <link rel="stylesheet" href="js/jquery-ui-1.11.4.custom/jquery-ui.css" type="text/css">
            <link rel="stylesheet" href="css/jquery.dataTables.css" type="text/css">

            <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
            <script type="text/javascript" src="css/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
            <script type="text/javascript" src="js/Usuario.js"></script>
            <script type="text/javascript" src="js/Docente.js"></script>
            <script type="text/javascript" src="js/HojaVida.js"></script>
            <script type="text/javascript" src="js/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
            <script type="text/javascript" src="js/jquery.dataTables.js"></script>
            <script type="text/javascript" src="js/jquery_validate.js"></script>

        </head>
        <body>
            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container"> 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <a target="_blank" href="#" class="navbar-brand"><b>Hojas de vida colegio Juan Camilo C</b></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">           
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-user"></span> 
                                    <strong><?php echo $usuario['nombres'] . " " . $usuario['apellidos']; ?></strong>
                                    <span class="glyphicon glyphicon-chevron-down"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="navbar-login">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <p class="text-center">
                                                        <span class="glyphicon glyphicon-user icon-size"></span>
                                                    </p>
                                                </div>
                                                <div class="col-lg-8">
                                                    <p class="text-left"><strong><?php echo $usuario['nombres'] . " " . $usuario['apellidos']; ?></strong></p>
                                                    <p class="text-left small"><?php echo $usuario['correo']; ?></p>
    <!--                                                    <p class="text-left">
                                                        <a href="#" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                                                    </p>-->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <div class="navbar-login navbar-login-session">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p>
                                                        <a href="lib/cerrar_sesion.php" class="btn btn-danger btn-block">Cerrar Sesion</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-sm-3 col-md-3">
                        <div class="panel-group" id="accordion">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-user">
                                            </span>Usuarios</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <a href="#" onclick="FormCrearUsuario()">Añadir usuarios</a> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" onclick="VerAdminUsuarios()">Administracion de usuarios</a>
                                                </td>
                                            </tr>


                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon glyphicon-education">
                                            </span>Docentes</a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <a href="#" onclick="FormCrearDocente()">Crear docente</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" onclick="AdministracionDocentes()">Admiinistracion de docentes</a> 
                                                </td>
                                            </tr>


                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-briefcase">
                                            </span>Hojas de vida (Curriculum)</a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <a href="#" onclick="FormHojaVida()">Crear hoja de vida por docente</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">Administrar hojas de vida</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">Buscar y descargar hoja de vida</a>
                                                </td>
                                            </tr>


                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-9">
                        <div class="well" id="cont_cod">
                            <h1>Gestion hojas de vida</h1>
                            Sistema que permite gestionar todas las hojas de vida de los docuentes de la institucion
                        </div>
                    </div>
                </div>
            </div>




        </body>
    </html>
    <?php
} else {
    header('Location: index.php');
}
?>