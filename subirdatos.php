<?php
header('Access-Control-Allow-Origin: *');
require_once 'accesoBD.php';

$objectResponse = new stdClass();
date_default_timezone_set("UTC");

if (isset($_POST['value']) && isset($_POST['type']) && isset($_POST['id_device'])) {
    $value = $_POST['value'];
    $type = $_POST['type'];
    $id_device = $_POST['id_device'];

    // Crear una instancia de accesoBD
    $accesoBD = new accesoBD();

    // Escapar las variables para prevenir inyección SQL (o preferiblemente, usar consultas preparadas)
    $value = mysqli_real_escape_string(conexion::conectar(), $value);
    $type = mysqli_real_escape_string(conexion::conectar(), $type);
    $id_device = mysqli_real_escape_string(conexion::conectar(), $id_device);

    $objectResponse = $accesoBD->subirDatos($value, $type, $id_device);
    echo json_encode($objectResponse);
} else {
    $objectResponse->code = '500';
    echo json_encode($objectResponse);
}
?>

