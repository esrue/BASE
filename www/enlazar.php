<?php

$dbname = "personas"; 
$user = "postgres"; 
$password = "123456"; 
$host = "localhost"; 

try {
    $conexion = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $consulta = "SELECT * FROM person"; 
    $resultado = $conexion->query($consulta);



    echo "Conexión a la base de datos y tabla realizada con éxito";
} catch (PDOException $e) {
    echo "Error en la conexión a la base de datos: " . $e->getMessage();
}
?>
