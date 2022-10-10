<?php
include "../config/conexion.php";

$data = array();
$id = $_GET['idSitio'];
$sql = mysqli_query($con, "SELECT * FROM tbSitios WHERE idSitio = '$id' LIMIT 1");

while($row = mysqli_fetch_object($sql)){
    $data[] = $row;
}

echo json_encode($data);
echo mysqli_error($con);