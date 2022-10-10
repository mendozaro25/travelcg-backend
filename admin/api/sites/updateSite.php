<?php
include "../config/conexion.php";

$input = file_get_contents('php://input');
$data = json_decode($input, true);
$message = array();

$nombre = $data['nomSitio'];
$ubicacion = $data['ubiSitio'];
$imagen = $data['urlSitio'];
$estado = $data['estadoSitio'];
$id = $_GET['idSitio'];

$sql = mysqli_query($con, "UPDATE tbSitios SET (nomSitio = $nombre, ubiSitio = $ubicacion, urlSitio = $imagen, 
estadoSitio = $estado) 
WHERE idSitio = '$id' LIMIT 1");

if($sql){
    $message['status'] = "modificado";
}else{
    http_response_code(422);
    $message['status'] = "error";
}

echo json_encode($message);
echo mysqli_error($con);