<?php

  session_start();

  if (!isset($_SESSION['id'])) {

    header('Location: index.php');

  }

  $nombre = $_SESSION['nombre'];
  $tipo_usuario = $_SESSION['tipo_usuario'];

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
  <title>M&MSOFT</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
    crossorigin="anonymous" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
  </script>
</head>


<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">M&MSOFT SISTEMA DE GESTION Y MANTENIMIENTO</a>
    <button class="btn btn-link btn-sm order-3 order-lg-2" id="sidebarToggle" href="#"><i
        class="fas fa-bars"></i></button>
    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <?php echo $nombre ?>
          <i class="fas fa-user fa-fw"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Configuración</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Salir</a>
        </div>
      </li>
    </ul>
  </nav>
  <br>
  <br>
<div class="container">
			<div class="row">
				<h3 style="text-align:center">Crear Hoja de vida</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="tipo_maquinaria" class="col-sm-2 control-label">Tipo De maquinaria</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tipo_maquinaria" name="tipo_maquinaria" placeholder="Tipo De Maquinaria" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="id_maquinaria" class="col-sm-2 control-label">id maquinaria</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id_maquinaria" name="id_maquinaria" placeholder="id maquinaria" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="marca" class="col-sm-2 control-label">Marca</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="marca" name="marca" placeholder="marca">
					</div>
				</div>
                <div class="form-group">
					<label for="modelo" class="col-sm-2 control-label">Modelo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo">
					</div>
				</div>
                <div class="form-group">
					<label for="horas_trabajadas" class="col-sm-2 control-label">Horas Trabajadas</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="horas_trabajadas" name="horas_trabajadas" placeholder="Horas trabajadas">
					</div>
				</div>
                <div class="form-group">
					<label for="operario_encargado" class="col-sm-2 control-label">Operario Encargado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="operario_encargado" name="operario_encargado" placeholder="Operario_Encargado">
					</div>
				</div>
				
				<div class="form-group">
					<label for="estado" class="col-sm-2 control-label">Estado </label>
					<div class="col-sm-10">
						<select class="form-control" id="estado" name="estado">
							<option value="Mantenimiento">Mantenimiento</option>
							<option value="Disponible">Disponible</option>
							<option value="Operando">Operando</option>
                            <option value="Averiado">Averiado</option>

						</select>
					</div>
				</div>
				
				<div class="form-group">
					
  <li>
    <label for="observaciones" class="col-sm-2 control-label">observaciones</label>
	<div class="col-sm-10">
    <textarea id="observaciones" name="observaciones"></textarea>
	</div>
  </li>
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
