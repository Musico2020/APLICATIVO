<?php
	
	require 'conexioncrud.php';
	$id = $_POST['id'];
	$tipo_maquinaria = $_POST['tipo_maquinaria'];
	$id_maquinaria= $_POST['id_maquinaria'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$horas_trabajadas = $_POST['horas_trabajadas'];
	$operario_encargado = $_POST['operario_encargado'];
	$estado = $_POST['estado'];
	$observaciones = $_POST['observaciones'];
	
	
	
	$sql = "UPDATE equipos SET tipo_maquinaria='$tipo_maquinaria', id_maquinaria='$id_maquinaria', marca='$marca', modelo='$modelo', horas_trabajadas='$horas_trabajadas', operario_encargado='$operario_encargado', estado='$estado', observaciones='$observaciones',' WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
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
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO MODIFICADO</h3>
				<?php } else { ?>
				<h3>ERROR AL MODIFICAR</h3>
				<?php } ?>
				
				<a href="hojacreada.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>
