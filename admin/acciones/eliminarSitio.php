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
        <title>Corpex SAC</title>
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
//ELIMINAMOS
        $id=$_GET['id'];
        $sql="DELETE FROM tbSitios WHERE idSitio = '$id'";
    //RESULTADO
        $resultado=mysqli_query($con,$sql) or die ('Error en el query database');
    //CERRAMOS CONEXIÓN
        mysqli_close($con);
    //REDICCIONAR
    $nuevaURL = '../listas/lista-sitios.';
    header('Location: '.$nuevaURL.php);
?>