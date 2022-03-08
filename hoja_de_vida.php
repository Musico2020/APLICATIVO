<?php

  session_start();

  if (!isset($_SESSION['id'])) {

    header('Location: index.php');

  }

  $nombre = $_SESSION['nombre'];
  $tipo_usuario = $_SESSION['tipo_usuario'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>M&MSOFT</title>
  <link href="css/styles.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
    crossorigin="anonymous" />
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
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Configuración</div>
            <li class="nav-item menu-open">
            <a href="dashboard.php" class="nav-link active" bacg>
              
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              
              Zona Administrativa
            </a>

            <?php if ($tipo_usuario == 1) { ?>

            <div class="sb-sidenav-menu-heading">Menu</div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
              aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
              Contenido
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link" href="Equipos.php" >Equipos</a>
                <a class="nav-link" href="orden_de_trabajo.php">Orden de Trabajos</a>
                <a class="nav-link" href="salida_de_almacen.php">Salida de Almacen</a>
                <a class="nav-link" href="planes_mantenimiento.php">Planes de Mantenimiento</a>
                <a class="nav-link" href="prestadores_servicios.php">Prestadores de Servicios</a>
                <a class="nav-link" href="agenda.php">Agenda</a>
              </nav>
            </div>
           
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth"
                  aria-expanded="false" aria-controls="pagesCollapseAuth">
                
                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                  data-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="login.html">Login</a>
                    <a class="nav-link" href="register.html">Register</a>
                    <a class="nav-link" href="password.html">Forgot Password</a>
                  </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError"
                  aria-expanded="false" aria-controls="pagesCollapseError">
                  Error
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                  data-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="401.html">401 Page</a>
                    <a class="nav-link" href="404.html">404 Page</a>
                    <a class="nav-link" href="500.html">500 Page</a>
                  </nav>
                </div>
              </nav>
            </div>

            <?php } ?>

            
              
            
            </div>
        </div>
        <div class="sb-sidenav-footer">
          <div class="small">Logged in as:</div>
          Start Bootstrap
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
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
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
