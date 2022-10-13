<?php
$username = $_POST['usuario'];
$password = $_POST['contrasenia'];

session_start();
$_SESSION['usuario'] = $username;

include("./admin/conexion.php");

    $sql = "SELECT usuario FROM tbUsers WHERE usuario='$username' AND contrasenia='$password' AND estadoUser=1";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            #if ($row['usuario'] = $username && $row['contrasenia'] = $password) {

            $_SESSION['admin'] = $username;

            header('Location: admin/index.php');

        }else{

            header("Location: index.php?error=Error: usuario y/o clave incorrectas...");

        }
    