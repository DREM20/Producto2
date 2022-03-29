<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="../restaurante/css/estilos.css" media="screen"/>
		<title><?php echo $data["titulo"]; ?></title>
	</head>
	
	<body class="im">
		<fieldset>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="principal.php?c=cuentasm&a=guarda" autocomplete="off">
				<div class="form-group">
					<label for="usuario">Usuario</label>
					<input type="text" class="form-control" id="usuario" name="usuario" />
				</div>
				
				<div class="form-group">
					<label for="contraseña">contraseña</label>
					<input type="text" class="form-control" id="contraseña" name="contraseña" />
				</div>
				
				<div class="form-group">
					<label for="tipousuario">Tipo de usuario</label>
					<input type="text" class="form-control" id="tipousuario" name="tipousuario" />
				</div>
				
				
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
		</fieldset>
	</body>
</html>