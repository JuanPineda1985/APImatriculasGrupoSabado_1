<?php

//vamos a invocar las cabeceras (o Plugins) para dar permisos de ejecución a los llamados de la API

header('Access-Control-Allow-Original: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE');
header('Access-Control-Max-Age:1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization');

// Ahora vamos a crear el metodo CONSULTAR para listar todos los registros

include 'Conexion/parametrosDB.php';
// Abrimos la conexion
$conn= new mysqli($HostName, $dataBaseName,$HostUser,$HostPass);
//ahora validamos la conexion
if ($conn -> connect_error)
{
    die("La conexion o se pudo realizar".$conn->connect_error);
}
else
{
    // ahora vamos a construir la consulta.
    $sql = "SELECT * FROM persona";
    $result = $conn->query($sql);   
}
?>