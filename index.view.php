<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario de contacto</title>
	<link rel="stylesheet" href="estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
		<div class="row">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

				<div class="row">
					<div class="col">
						<input  type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre?>">
					</div>
					<div class="col">
						<input  type="text" class="form-control" name="ocupacion" id="ocupacion" placeholder="Ocupación:" value="<?php if(!$enviado && isset($ocupacion)) echo $ocupacion?>">	
					</div>		
				</div>
				<div class="row">
					<div class="col">
						<input type="text" class="form-control" name="correo" id="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo?>">
					</div>
					<div class="col">
						<select type="select" id="select" class="form-control" name="pais">
							<option value="" selected> - Selecciona un pais - </option>
							<option value="mexico">México</option>
							<option value="españa">España</option>
							<option value="estdos unidos">Estados Unidos</option>
							<option value="argentina">Argentina</option>

							<?php if(!$enviado && isset($pais)) echo $pais?>
						</select>
					</div>
				</div>

				
				<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo" value="<?php if(!$enviado && isset($titulo)) echo $titulo?>">
				<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje?></textarea>

				
				<!-- Mensajes de alerta -->
				<?php if (!empty($errores)): ?>
					<div class="alert error" role="alert">
						<?php echo $errores; ?>
					</div>
				<?php elseif($enviado) : ?>
					<div class="alert success" role="alert">
						<?php echo 'Enviado Correctamente'; ?>
					</div>
				<?php endif; ?>

				<div class="row">
					<div class="col">
						<div class="form-group">
							
							<input type="file" class="form-control-file" id="adjuntar">
							<label for="adjuntar">Adjuntar CV</label>
						</div>
					</div>
					<div class="col">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="Check" name="check">
							<label class="form-check-label" for="Check">
        						Acepto terminos y condiciones
      						</label>
						</div>  	
					</div>

				</div>

		
				

				
				
				<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
			</form>

		</div>		
	</div>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>