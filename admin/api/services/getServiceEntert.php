<?php
include "../config/conexion.php";

$data = array();
$sql = mysqli_query($con, "SELECT * FROM tbServicios WHERE categoriaServicio = 'Entretenimiento'");

while($row = mysqli_fetch_object($sql)){
    $data[] = $row;
}

echo json_encode($data);
echo mysqli_error($con);