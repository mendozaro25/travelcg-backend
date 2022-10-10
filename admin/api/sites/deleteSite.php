<?php
include "../config/conexion.php";

$input = file_get_contents('php://input');
$message = array();

$id = $_GET['idSitio'];
$sql = mysqli_query($con, "DELETE FROM tbSitios WHERE idSitio = '$id' LIMIT 1");

if($sql){
    http_response_code(201);
    $message['status'] = "eliminado";
}else{
    http_response_code(422);
    $message['status'] = "error";
}

echo json_encode($message);
echo mysqli_error($con);
