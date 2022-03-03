<?php
	require 'conexioncrud.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM equipos WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO DE EQUIPOS</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="tipo_maquinaria" class="col-sm-2 control-label">tipo de maquinaria</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tipo_maquinaria" name="tipo_maquinaria" placeholder="tipo de maquinaria" value="<?php echo $row['tipo_maquinaria']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="id_maquinaria" class="col-sm-2 control-label">id maquinaria</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id_maquinaria" name="id_maquinaria" placeholder="id maquinaria" value="<?php echo $row['id_maquinaria']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="marca" class="col-sm-2 control-label">marca</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="marca" name="marca" placeholder="marca" value="<?php echo $row['marca']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="modelo" class="col-sm-2 control-label">modelo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="modelo" name="modelo" placeholder="modelo" value="<?php echo $row['modelo']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="horas_trabajadas" class="col-sm-2 control-label">horas trabajadas</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="horas_trabajadas" name="horas_trabajadas" placeholder="horas trabajadas" value="<?php echo $row['horas_trabajadas']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="operario_encargado" class="col-sm-2 control-label">operario encargado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="operario_encargado" name="operario_encargado" placeholder="operario encargado" value="<?php echo $row['operario_encargado']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="estado" class="col-sm-2 control-label">Estado</label>
					<div class="col-sm-10">
						<select class="form-control" id="estado" name="estado">
							<option value="mantenimiento" <?php if($row['estado']=='mantenimiento') echo 'selected'; ?>>mantenimiento</option>
							<option value="disponible" <?php if($row['estado']=='disponible') echo 'selected'; ?>>disponible</option>
							<option value="operando" <?php if($row['estado']=='operando') echo 'selected'; ?>>operando</option>
							<option value="averiado" <?php if($row['estado']=='averiado') echo 'selected'; ?>>averiado</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="observaciones" class="col-sm-2 control-label">observaciones</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="observaciones" name="observaciones" placeholder="observaciones" value="<?php echo $row['observaciones']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="hojacreada.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>