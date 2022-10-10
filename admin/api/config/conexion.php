<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Access-Control-Max-Age: 1728000');
header('Content-Length: 0');
header('Content-Type: text/plain');
//ABRIMOS CONEXIÓN
$con=mysqli_connect('tourscg.com:3306','mendozaro25','Mendoz@123','bdAppTravelcg') or die('Error en la conexion servidor');
