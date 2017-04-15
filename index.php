<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOJAS DE VIDA JCCF</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    </head>
    <body>
        <div class="container">

            <header>
                <h1>Gestion de hojas de vida JCCF</h1>

            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="#" autocomplete="on"> 
                                <h1>INGRESO</h1> 
                                <p> 
                                    <label for="username" class="uname" >Ingrese su nombre de usuario</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="nombre de usuario"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd">Clave</label>
                                    <input id="password" name="password" required="required" type="password" placeholder="clave" /> 
                                </p>
                                
                                <p class="login button"> 
                                    <a href="Aplicacion.php" class="btn btn-default">Ingresar</a>
                                </p>
                                <p class="change_link">
                                  
                                    <a href="#" class="to_register">Recuperar clave </a>
                                </p>
                            </form>
                        </div>

                        

                    </div>
                </div>  
            </section>
        </div>

    </body>
</html>
