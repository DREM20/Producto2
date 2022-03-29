<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="../restaurante/css/estilos.css" media="screen"/>
		<title><?php echo $data["titulo"]; ?></title>
		
	
	<body class="im">
		<fieldset>
		<div class="container">
			
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="principal.php?c=cuentasm&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />
				
				<div class="form-group">
					<label for="usuario">Usuario</label>
					<input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $data["cuentas"]["usuario"]?>" />
				</div>
				
				<div class="form-group">
					<label for="contraseña">Contraseña</label>
					<input type="text" class="form-control" id="contraseña" name="contraseña" value="<?php echo $data["cuentas"]["contraseña"]?>" />
				</div>
				
				<div class="form-group">
					<label for="tipousuario">Tipo de usuario</label>
					<input type="text" class="form-control" id="tipousuario" name="tipousuario" value="<?php echo $data["cuentas"]["tipousuario"]?>" />
				</div>
				
				
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
		</fieldset>
	</body>
</html>		