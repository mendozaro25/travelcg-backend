<?php
include "../config/conexion.php";

$data = array();
$id = $_GET['idServicio'];
$sql = mysqli_query($con, "SELECT * FROM tbServicios WHERE idServicio = '$id' LIMIT 1");

while($row = mysqli_fetch_object($sql)){
    $data[] = $row;
}

echo json_encode($data);
echo mysqli_error($con);