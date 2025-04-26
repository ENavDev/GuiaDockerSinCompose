<?php
$conexion = new mysqli(
    "host.docker.internal", 
    "root",                 
    "rootpassword",         
    "midb",                
    3307                    
);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
