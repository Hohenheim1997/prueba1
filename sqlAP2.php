<?php

$databasehost = "sql.bsite.net\MSSQL2016";
$databasename = "hohen_SampleDB";
$databaseusername ="hohen_SampleDB";
$databasepassword = "1234";

try {
    // Cadena de conexión PDO para SQL Server
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
    
    // Configurar el manejo de errores
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "¡Conexión exitosa a SQL Server!";
    
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>