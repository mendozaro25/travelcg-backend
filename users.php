<?php
$username = $_POST['usuario'];
$password = $_POST['contrasenia'];

session_start();
$_SESSION['usuario'] = $username;


if($username="admintravelcg" && $password="travelcg2022"){ 
    $_SESSION['admin'] = $username;
    header('Location: admin/index.php');
} 
else {
    header('Location: index.php');
    echo '<script language="javascript">alert("Credenciales Incorrectas");</script>';
}

