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
		<title>App Travel Cg | Listas de Servicios</title>
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

<?php
    //ABRIMOS CONEXIÓN
	include("../conexion.php");

    //MOSTRAMOS LISTA

        $sql=
        "SELECT *
         FROM tbServicios;
         ";
        $datos=mysqli_query($con,$sql) or die ('Error en el query database');

?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>App Travel Cg | Lista de Servicios</title>

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
						<a href="../index.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Inicio</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-copy"></span><span class="mtext">Registrar</span>
						</a>
						<ul class="submenu">
							<li><a href="../registros/nuevo-sitio.php">Registrar Nuevo Sitio</a></li>
							<li><a href="../registros/nuevo-servicio.php">Registrar Nuevo Servicio</a></li>
							<li><a href="#">Registrar Nuevo ...</a></li>
						</ul>
					</li>
                    <li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-list3"></span><span class="mtext">Listas</span>
						</a>
						<ul class="submenu">
                            <li><a href="lista-sitios.php">Lista de Sitios</a></li>
							<li><a href="lista-servicios.php">Lista de Servicios</a></li>
							<li><a href="#">Lista de ...</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Reportes</span>
						</a>
						<ul class="submenu">
                            <li><a href="../reportes/reportes-sitios.php">Reportes Sitios</a></li>
                            <li><a href="../reportes/reportes-servicios.php">Reportes Servicios</a></li>
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
                <h4>Listas</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Listas</a></li>
					<li class="breadcrumb-item active" aria-current="page">Lista de Servicios</li>
				</ol>
			</nav>
	    </div>

    <div class="card-box mb-30">
      <div class="pd-20">
      <h4 class="text-blue h4">Lista de Servicios // App Travel Cg</h4>
      </div>
      <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
        <thead>
            <tr>
              <th class="table-plus datatable-nosort">Nombre</th>
              <th>Ubicación</th>
			  <th>Categoria</th>
			  <th>Estado</th>
              <th class="datatable-nosort">Acciones</th>
            </tr>
          </thead>
          <tbody>
          <?php  while ($row = $datos->fetch_assoc()) {?>
                    <tr class="table-plus">
                    <td><?php echo $row['nomServicio']; ?></td>
                        <td><?php echo $row['ubiServicio']; ?></td>
						<td><?php echo $row['categoriaServicio']; ?></td>
							<?php
							if($row['estadoServicio']=='1'){
								?>
								<td style="color: green;" >Activo</td>
								<?php
							}else{
								?>
								<td style="color: red;" >Inactivo</td>
								<?php
							}
							?>
                            <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                  <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
								<a class="dropdown-item" href="../formularios/modificarServicio.php?id=<?php echo $row['idServicio'];?>"><i class="dw dw-edit2"></i> Editar</a>
								<a class="dropdown-item" href="../acciones/eliminarServicio.php?id=<?php echo $row['idServicio'];?>"><i class="dw dw-delete-3"></i> Eliminar</a>
								</div>
							</div>
                            </td>
                    </tr>
                  <?php }?>
          <thead>
            <tr>
			  <th class="table-plus datatable-nosort">Nombre</th>
              <th>Ubicación</th>
			  <th>Categoria</th>
			  <th>Estado</th>
              <th class="datatable-nosort">Acciones</th>
            </tr>
          </thead>
        </table>
    </div>
    

	<!-- Vendor JS Files -->
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

    <!-- js -->
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
	<script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="../src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="../src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="../src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="../src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="../src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="../src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="../src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="../vendors/scripts/datatable-setting.js"></script>

</body>
</html>