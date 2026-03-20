<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Probando PHP</h1>";

$host = "db";
$user = "root";
$password = "root123";
$database = "practica_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexion: " . $conn->connect_error);
}

echo "<p>Hola mundo</p>";
echo "<p>Conexion exitosa a MySQL desde docker con PHP</p>";

$conn->close();
?>