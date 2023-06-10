<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';
$dbname = 'company';
$username = 'luisa1';
$password = '12345';

// Establecer conexión a la base de datos
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión a la base de datos: " . $e->getMessage();
    exit();
}
