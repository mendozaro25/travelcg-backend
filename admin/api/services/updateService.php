<?php
include "../config/conexion.php";

$input = file_get_contents('php://input');
$data = json_decode($input, true);
$message = array();

$nombre = $data['nomServicio'];
$ubicacion = $data['ubiServicio'];
$imagen = $data['urlServicio'];
$estado = $data['estadoServicio'];
$categoria = $data['categoriaServicio'];
$id = $_GET['idServicio'];

$sql = mysqli_query($con, "UPDATE tbServicios SET (nomServicio = $nombre, ubiServicio = $ubicacion, urlServicio = $imagen, estadoServicio = $estado, categoriaServicio = $categoria)
WHERE idServicio = '$id' LIMIT 1");

if($sql){
    $message['status'] = "modificado";
}else{
    http_response_code(422);
    $message['status'] = "error";
}

echo json_encode($message);
echo mysqli_error($con);