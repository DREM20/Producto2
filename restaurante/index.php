<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Inicio</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="./css/EStiloLogin.scss">
    
</head>


<body>
    <!-- Formularios -->
    <?php

    if (isset($_GET["error"]) == "si") { ?>
        <div class="alert alert-danger text-center" role="alert">
            <h1><i class="fas fa-exclamation-triangle"></i> Error de usuario o Contraseña</h1>
        </div>
    <?php } ?>

    <div class="contenedor-formularios">
        <ul class="contenedor-tabs">
            <li class="tab tab-segunda active"><a href="#iniciar-sesion">Iniciar Sesión</a></li>
            <li class="tab tab-primera"><a href="#registrarse">Registrarse</a></li>
        </ul>

        <!-- Contenido de los Formularios -->
        <div class="contenido-tab">
            <div id="iniciar-sesion">
                <h1>Iniciar Sesión</h1>
                <div class="card-title ">
                    <h5>Regístrate o inicia sesión para continuar</h5>
                </div>
                <form action="principal.php?c=cuentas&a=index" method="post">
                    <div class="contenedor-input">
                        <label class="form-label" for="usuario">
                            Nombre<span class="req">*</span>
                        </label>
                        <input class="form-control" type="text" name="usuario" id="usuario">
                    </div>

                    <div class="contenedor-input">
                        <label class="mt-3 form-label" for="contraseña">
                            Contraseña <span class="req">*</span>
                        </label>
                        <input class="form-control" type="password" name="contraseña" id="contraseña">
                    </div>
                    <p class="forgot"><a href="#">Se te olvidó la contraseña?</a></p>
                    <input type="submit" class="btn btn-primary container-fluid" value="Iniciar Sesión">
                </form>
            </div>


            <div id="registrarse">
                <h1>Registrarse</h1>
                <form action="#" method="post">
                    <div class="fila-arriba">
                        <div class="contenedor-input">
                            <label>
                                Nombre <span class="req">*</span>
                            </label>
                            <input type="text" required>
                        </div>

                        <div class="contenedor-input">
                            <label>
                                Apellido <span class="req">*</span>
                            </label>
                            <input type="text" required>
                        </div>
                    </div>
                    <div class="contenedor-input">
                        <label>
                            Usuario <span class="req">*</span>
                        </label>
                        <input type="text" required>
                    </div>
                    <div class="contenedor-input">
                        <label>
                            Email <span class="req">*</span>
                        </label>
                        <input type="email" required>
                    </div>
                    <div class="contenedor-input">
                        <label>
                            Contraseña <span class="req">*</span>
                        </label>
                        <input type="password" required>
                    </div>

                    <div class="contenedor-input">
                        <label>
                            Repetir Contraseña <span class="req">*</span>
                        </label>
                        <input type="password" required>
                    </div>

                    <input type="submit" class="button button-block" value="Registrarse">
                </form>
            </div>
        </div>
    </div>
    <script src="./js/jquery.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>