<?php
include "../config/conexion.php";

$input = file_get_contents('php://input');
$data = json_decode($input, true);
$message = array();

$nombre = $data['nomSitio'];
$ubicacion = $data['ubiSitio'];
$imagen = $data['urlSitio'];
$estado = $data['estadoSitio'];

$sql = mysqli_query($con, "INSERT INTO tbSitios (nomSitio, ubiSitio, urlSitio, estadoSitio) 
VALUES ('$nombre', '$ubicacion', '$imagen', '$estado')");

if($sql){
    http_response_code(201);
    $message['status'] = "registrado";
}else{
    http_response_code(422);
    $message['status'] = "error";
}

echo json_encode($message);
echo mysqli_error($con);
