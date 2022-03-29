
<?php
require('./sesiones/seguridad.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../restaurante/css/estilos.css" media="screen" />
    <title>Menu</title>
</head>

<body class="im">
    <button><a href=" ../restaurante/sesiones/salir.php">Salir</a></button>

    <div class="position-absolute top-50 start-50 translate-middle">
        <fieldset>
            <table border="1" width="80%" class="table">
                <div>
                    <div class="card" style="width: 500px;">
                        <thead>
                            <div class="p-5 border rounded">
                                <div class="card-body">
                                    <h2 class="card-title">Menu</h2>
                                    <fieldset><a class="card-text">Seleccione una de las siguientes opciones para ver, crear, modifica y eliminar los registros.</a></fieldset>

                                </div>
                            </div>
                        </thead>
                        <tbody>
                            <div>


                                <tr>
                                    <td>
                                        <button>
                                            <a href="principal.php?c=cuentasm&a=index" class="btn btn-outline-dark container-fluid my-2">CUENTAS</a>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button>
                                            <a href="principal.php?c=bebidas&a=index" class="btn btn-outline-dark container-fluid my-2">BEBIDAS</a>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button>
                                            <a href="principal.php?c=platillos&a=index" class="btn btn-outline-dark container-fluid my-2">PLATILLOS</a>

                                        </button>
                                    </td>
                                </tr>





                            </div>
                        </tbody>
                    </div>
                </div>
            </table>
        </fieldset>
    </div>

</body>

</html>