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
		<title>App Travel Cg | Administrador</title>
		<!-- Site favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/logo-travelcg.png" >
		<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/logo-travelcg.png" >
		<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/logo-travelcg.png" >
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
		<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

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
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	</body>
	</html>
	<?php
	die();
}
?>

<?php
    //Abrimos Conexión

	include("conexion.php");

	//Consultas

	$sqlSitios1 = "SELECT count(idSitio) as cantidadSitios FROM tbSitios WHERE estadoSitio = 1";
	$cantidadSitios1 = mysqli_query($con,$sqlSitios1) or die ('Error en el query database');

	$sqlSitios0 = "SELECT count(idSitio) as cantidadSitios FROM tbSitios WHERE estadoSitio = 0";
	$cantidadSitios0 = mysqli_query($con,$sqlSitios0) or die ('Error en el query database');

	$sqlServicios1 = "SELECT count(idServicio) as cantidadServicios FROM tbServicios WHERE estadoServicio = 1";
	$cantidadServicios1 = mysqli_query($con,$sqlServicios1) or die ('Error en el query database');

	$sqlServicios0 = "SELECT count(idServicio) as cantidadServicios FROM tbServicios WHERE estadoServicio = 0";
	$cantidadServicios0 = mysqli_query($con,$sqlServicios0) or die ('Error en el query database');

	$sqlImagen1 = "SELECT urlSitio as imagenActiva FROM tbSitios WHERE idSitio = 1";
	$imagenActiva = mysqli_query($con,$sqlImagen1) or die ('Error en el query database');

	$sqlImagenes = "SELECT urlSitio as imagenes FROM tbSitios";
	$imagenes = mysqli_query($con,$sqlImagenes) or die ('Error en el query database');
	
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>App Travel Cg | Administrador</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/logo-travelcg.png" >
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/logo-travelcg.png" >
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/logo-travelcg.png" >

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

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
					<a class="dropdown-toggle" href="index.html" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="/assets/img/logo-travelcg.png" alt="logo">
						</span>
						<span class="user-name"><?php echo $_SESSION['usuario'] ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="cerrar_sesion.php"><i class="dw dw-logout"></i>Salir</a>					
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.php">
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
						<a href="index.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Inicio</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-copy"></span><span class="mtext">Registrar</span>
						</a>
						<ul class="submenu">
							<li><a href="./registros/nuevo-sitio.php">Registrar Nuevo Sitio</a></li>
							<li><a href="./registros/nuevo-servicio.php">Registrar Nuevo Servicio</a></li>
							<li><a href="#">Registrar Nuevo ...</a></li>
						</ul>
					</li>
                    <li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-list3"></span><span class="mtext">Listas</span>
						</a>
						<ul class="submenu">
                            <li><a href="./listas/lista-sitios.php">Lista de Sitios</a></li>
							<li><a href="./listas/lista-servicios.php">Lista de Servicios</a></li>
							<li><a href="#">Lista de ...</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Reportes</span>
						</a>
						<ul class="submenu">
                            <li><a href="./reportes/reportes-sitios.php">Reportes Sitios</a></li>
                            <li><a href="./reportes/reportes-servicios.php">Reportes Servicios</a></li>
                            <li><a href="#">Reportes ...</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="row">
			<div class="col-xl-3 mb-30">
			<?php  while ($row = $cantidadSitios1->fetch_assoc()) {?>
				<div class="card card-box">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Sitios Turisticos</h5>
						<p class="card-text" style="text-align: center; font-size: 45px; font-weight: 650;"><?php echo $row['cantidadSitios']; ?></p>
						<p class="card-text" style="text-align: center;"><small class="text-muted">sitios turisticos registrados</small></p>
					</div>
				</div>
			<?php }?>
			</div>

			<div class="col-xl-3 mb-30">
				<?php  while ($row = $cantidadSitios0->fetch_assoc()) {?>
				<div class="card card-box">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Sitios Turisticos</h5>
						<p class="card-text" style="text-align: center; font-size: 45px; font-weight: 650;"><?php echo $row['cantidadSitios']; ?></p>
						<p class="card-text" style="text-align: center;"><small class="text-muted">sitios turisticos inactivos</small></p>
					</div>
				</div>
				<?php }?>
			</div>

			<div class="col-xl-3 mb-30">
				<?php  while ($row = $cantidadServicios1->fetch_assoc()) {?>
				<div class="card card-box">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Servicios</h5>
						<p class="card-text" style="text-align: center; font-size: 45px; font-weight: 650;"><?php echo $row['cantidadServicios']; ?></p>
						<p class="card-text" style="text-align: center;"><small class="text-muted">servicios registrados</small></p>
					</div>
				</div>
				<?php }?>
			</div>

			<div class="col-xl-3 mb-30">
				<?php  while ($row = $cantidadServicios0->fetch_assoc()) {?>
				<div class="card card-box">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Servicios</h5>
						<p class="card-text" style="text-align: center; font-size: 45px; font-weight: 650;"><?php echo $row['cantidadServicios']; ?></p>
						<p class="card-text" style="text-align: center;"><small class="text-muted">servicios inactivos</small></p>
					</div>
				</div>
				<?php }?>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-5">
				<div class="card-box mb-30">
					<div class="clearfix pd-20">
						<div>
							<h4 class="h4" style="font-family: system-ui; font-weight: 700; margin-left: 18.5%;">Imagenes de los Sitios Turisticos</h4>
						</div>
					</div>

					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">

							<?php  while ($row = $imagenActiva->fetch_assoc()) {?>
							<div class="carousel-item active">
								<img
									class="d-block w-100"
									src="<?php echo $row['imagenActiva']; ?>"
									alt="First slide"
								/>
							</div>
							<?php }?>

							<?php  while ($row = $imagenes->fetch_assoc()) {?>
							<div class="carousel-item">
								<img
									class="d-block w-100"
									src="<?php echo $row['imagenes']; ?>"
									alt="Second slide"
								/>
							</div>
							<?php }?>
						</div>

						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true" ></span> <span class="sr-only">Anterior</span> 
						</a>

						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true" ></span> <span class="sr-only">Siguiente</span>
						</a>
					</div>
				</div>
			</div>

			<div class="col-md-7 mb-30">
				<div class="pd-20 card-box">
					<div id="chart-container">cargando...</div>
				</div>
			</div>
        </div>
	</div>

	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
	<script src="js/fusioncharts.js"></script>
	<script src="js/fusioncharts.charts.js"></script>
	<script src="js/themes/fusioncharts.theme.zune.js"></script>
	<script src="js/app.js"></script>
</body>
</html>