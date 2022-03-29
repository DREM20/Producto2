<?php
require('./sesiones/seguridad.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="../restaurante/css/estilos.css" media="screen"/>
		<title><?php echo $data["titulo"]; ?></title>
		
	
	<body class="im">
	<button><a href=" ../restaurante/sesiones/salir.php">Salir</a></button>
		<fieldset>
			<div class="container">
			
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="principal.php?c=bebidas&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />
				
				<div class="form-group">
					<label for="nombre">	Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data["bebidas"]["nombre"]?>" />
				</div>
				
				<div class="form-group">
					<label for="costo">Costo</label>
					<input type="text" class="form-control" id="costo" name="costo" value="<?php echo $data["bebidas"]["costo"]?>" />
				</div>
				
				<div class="form-group">
					<label for="descripccion">Descripcion</label>
					<input type="text" class="form-control" id="descripccion" name="descripccion" value="<?php echo $data["bebidas"]["descripccion"]?>" />
				</div>
				
				<div class="form-group">
					<label for="proveedor">Proveedor</label>
					<input type="text" class="form-control" id="proveedor" name="proveedor" value="<?php echo $data["bebidas"]["proveedor"]?>" />
				</div>
				
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
		</fieldset>
	</body>
</html>		