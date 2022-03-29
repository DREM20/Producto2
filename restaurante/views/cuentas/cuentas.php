<?php
require('./sesiones/seguridad.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../restaurante/css/estilos.css" media="screen" />
	<title><?php echo $data["titulo"]; ?></title>
</head>

<body class="im">
<button><a href=" ../restaurante/sesiones/salir.php">Salir</a></button>
	<fieldset>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>

			<legend><a href="principal.php?c=cuentasm&a=nuevo" class="btn btn-primary">Agregar</a></legend>


			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>Usuario</th>
							<th>contraseña</th>
							<th>Tipo de usuario</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>

					<tbody>
						<?php foreach ($data["cuentas"] as $dato) {
							echo "<tr>";
							echo "<td>" . $dato["usuario"] . "</td>";
							echo "<td>" . $dato["contraseña"] . "</td>";
							echo "<td>" . $dato["tipousuario"] . "</td>";
							echo "<td><legend><a href='principal.php?c=cuentasm&a=modificar&id=" . $dato["id"] . "' class='btn btn-warning'>Modificar</a></legend></td>";
							echo "<td><legend><a href='principal.php?c=cuentasm&a=eliminar&id=" . $dato["id"] . "' class='btn btn-danger'>Eliminar</a></legend></td>";
							echo "</tr>";
						}
						?>
					</tbody>

				</table>
			</div>
		</div>
	</fieldset>
	<?php
	if ($_SESSION["autenticado"] == 1) {
	?>
		<div class="container">
			<ul class="contenedor-tabs">
				<li class="tab tab-segunda active"><button><a href="principal.php?c=bebidas&a=index">BEBIDAS</a></button></li>
				<li class="tab tab-segunda active"><button><a href="principal.php?c=platillos&a=index">PLATILLOS</a></button></li>
				<li class="tab tab-segunda active"><button><a href="principal.php?c=cuentas&a=index2">MENU</a></button></li>
			</ul>
		</div>
	<?php
	}
	?>
	

</body>

</html>