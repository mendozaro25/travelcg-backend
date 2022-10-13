<?php
session_start();
error_reporting(0);

$varsesionAdmin = $_SESSION['admin']; 

if($varsesionAdmin){
	header('Location: /admin/index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>App Travel Cg</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="author" content="" />
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/assets/img/logo-travelcg.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-css/util.css">
	<link rel="stylesheet" type="text/css" href="login-css/main.css">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<!--===============================================================================================-->

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-119386393-1');
</script>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/assets/img/fondo-bg.gif');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<img class="login100-form-logo" src="/assets/img/logo-travelcg.png" alt="Logo">
				<br>
				<form 
				action="users.php" method="post"
				name="form-login" class="login100-form validate-form p-b-33 p-t-5">

				
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input 
						class="input100" 
						type="text" 
						name="usuario" 
						id="usuario" 
						placeholder="Usuario"
						required
						>
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input 
						class="input100" 
						type="password" 
						name="contrasenia" 
						id="contrasenia" 
						placeholder="Contraseña"
						required
						>
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
							<button 
							id="show_password" 
							type="button" 
							onclick="mostrarPassword()"
							style="
							background-color: green;
							color: white; 
							padding: 2px; 
							border-radius: 21%;
							width: 40px;
							margin-left: 50%;
							transform: translateX(-50%);
							"
							> 
							<span class="fa fa-eye-slash icon"></span>
							</button>
						</div>
					
					<script type="text/javascript">
					// MOSTRAR CONTRASEÑA
					function mostrarPassword(){
						var cambio = document.getElementById("contrasenia");
						if(cambio.type == "password"){
							cambio.type = "text";
							$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
						}else{
							cambio.type = "password";
							$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
						}
					} 
					$(document).ready(function () {
						//CheckBox mostrar contraseña
						$('#ShowPassword').click(function () {
							$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
						});
					});
					</script>

					<?php
					if (isset($_GET["error"])):
					?>
					<div class="text-danger"> <?= $_GET["error"] ?> </div>
					<?php
					endif;
					?>

					<div class="container-login100-form-btn m-t-32">
						<input 
						class="login100-form-btn"
						id="submit"
						type="submit"
						value="Iniciar Sesión"
						>	
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
	

	<div id="dropDownSelect1"></div>
	

	<script src="js/main.js"></script>
	<script src="js/login.js"></script>
	<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  
	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>
  
	<!-- js -->
	  <script src="vendors/scripts/core.js"></script>
	  <script src="vendors/scripts/script.min.js"></script>
	  <script src="vendors/scripts/process.js"></script>
	  <script src="vendors/scripts/layout-settings.js"></script>
	  <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	  <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	  <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	  <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	  <!-- buttons for Export datatable -->
	  <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	  <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	  <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	  <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	  <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	  <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	  <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	  <!-- Datatable Setting js -->
	  <script src="vendors/scripts/datatable-setting.js"></script>
	  <!-- SweetAlert2 -->
	  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>