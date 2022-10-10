<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['admin'];
$varsesionEmpleado = $_SESSION['empleado']; 

if($varsesion == null || $varsesion = '' || $varsesionEmpleado){
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>App Travel Cg | Registrar Sitio</title>
		<!-- Site favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/logo-travelcg.png" >
		<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/logo-travelcg.png" >
		<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/logo-travelcg.png" >
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/vendors/styles/core.css">
		<link rel="stylesheet" type="text/css" href="/vendors/styles/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" type="text/css" href="/src/plugins/datatables/css/responsive.bootstrap4.min.css">
		<link rel="stylesheet" type="text/css" href="/vendors/styles/style.css">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-119386393-1');
		</script>
	</head>
	<body>
	<div class="error-page d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="pd-10">
			<div class="error-page-wrap text-center">
				<h1>505</h1>
				<h3>Error: 505 NO TIENES AUTORIZACIÓN !</h3>
				<p>Usted no tiene autorización de ingreso a este sitio <br> 
				¡Comuniquese con algún encargado o puede logearse nuevamente!</p>
				<div class="pt-20 mx-auto max-width-200">
					<a href="/index.php" class="btn btn-primary btn-block btn-lg">Volver a Inicio</a>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="/vendors/scripts/core.js"></script>
	<script src="/vendors/scripts/script.min.js"></script>
	<script src="/vendors/scripts/process.js"></script>
	<script src="/vendors/scripts/layout-settings.js"></script>
	</body>
	</html>
	<?php
	die();
}
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>App Travel Cg | Registrar Sitio</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/logo-travelcg.png" >
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/logo-travelcg.png" >
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/logo-travelcg.png" >

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>

	<div class="header">
		<div class="header-left">
		</div>
		<div class="header-right">
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="index.php" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="/assets/img/admin-travel.png" alt="logo">
						</span>
						<span class="user-name"><?php echo $_SESSION['usuario'] ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
					<a class="dropdown-item" href="../cerrar_sesion.php"><i class="dw dw-logout"></i>Salir</a>				
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="../index.php">
				App Travel Cg
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="../index.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Inicio</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-copy"></span><span class="mtext">Registrar</span>
						</a>
						<ul class="submenu">
							<li><a href="nuevo-usuario.php">Registrar Nuevo Sitio</a></li>
							<li><a href="nuevo-servicio.php">Registrar Nuevo Servicio</a></li>
							<li><a href="#">Registrar Nuevo ...</a></li>
						</ul>
					</li>
                    <li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-list3"></span><span class="mtext">Listas</span>
						</a>
						<ul class="submenu">
                            <li><a href="../listas/lista-sitios.php">Lista de Sitios</a></li>
							<li><a href="../listas/lista-servicios.php">Lista de Servicios</a></li>
							<li><a href="#">Lista de ...</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Reportes</span>
						</a>
						<ul class="submenu">
                            <li><a href="../reportes/reportes-avances.php">Reportes Sitios</a></li>
                            <li><a href="../reportes/reportes-clientes.php">Reportes Servicios</a></li>
                            <li><a href="#">Reportes ...</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Registros</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Registros</a></li>
					<li class="breadcrumb-item active" aria-current="page">Registrar Nuevo Sitio</li>
				</ol>
			</nav>
		</div>
		<form action="../acciones/insertarSitio.php" method="post">
			<div class="form-group row">
				<div class="col-sm-12 col-md-6">
					<label class="col-sm-12" style="font-size: 15px; font-weight: 600; font-family: system-ui;">Nombre</label>
					<input class="form-control" name="nombre" type="text" placeholder="Nombre" required>
				</div>
				<div class="col-sm-12 col-md-6">
					<label class="col-sm-12" style="font-size: 15px; font-weight: 600; font-family: system-ui;">Ubicación</label>
					<input class="form-control" name="ubicacion" type="text" placeholder="Ubicación" required>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-12 col-md-6">
					<label class="col-sm-12" style="font-size: 15px; font-weight: 600; font-family: system-ui;">URL de la Imagen</label>
					<input class="form-control" name="imagen" type="text" placeholder="URL de la Imagen" required>
				</div>
				<div class="col-sm-12 col-md-6">
				<label class="col-sm-12" style="font-size: 15px; font-weight: 600; font-family: system-ui;">URL de la Imagen 360°</label>
					<input class="form-control" name="imagen360" type="text" placeholder="URL de la Imagen 360°" required>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-12 col-md-12">
					<label class="col-sm-12" style="font-size: 15px; font-weight: 600; font-family: system-ui;">Descripción</label>
					<textarea class="form-control" name="descripcion" type="text" placeholder="Descripción" required></textarea>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-12 col-md-3">
					<label class="col-sm-12" style="font-size: 15px; font-weight: 600; font-family: system-ui;">Horario de Atención</label>
					<input class="form-control" name="atencion" type="time" placeholder="Atención" required>
				</div>
				<div class="col-sm-12 col-md-3">
					<label class="col-sm-12" style="font-size: 15px; font-weight: 600; font-family: system-ui;">Latitud</label>
					<input class="form-control" name="latitud" type="text" placeholder="Latitud" required>
				</div>
				<div class="col-sm-12 col-md-3">
					<label class="col-sm-12" style="font-size: 15px; font-weight: 600; font-family: system-ui;">Longitud</label>
					<input class="form-control" name="longitud" type="text" placeholder="Longitud" required>
				</div>
				<div class="col-sm-12 col-md-3">
					<label class="col-sm-12" style="font-size: 15px; font-weight: 600; font-family: system-ui;">Estado</label>
					<select class="custom-select col-12" name="estado" required>
						<option value="1" select>Activo</option>
						<option value="0">Inactivo</option>
					</select>
				</div>
			</div>
			<button type="submit" class="btn btn-primary" data-dismiss="modal">Guardar</button>
		</form>
	</div>

	<!-- js -->
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
	<script src="../src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="../vendors/scripts/dashboard.js"></script>
	<script src="sweetalert2.all.min.js"></script>
</body>
</html>