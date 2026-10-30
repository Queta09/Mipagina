<?php
$host = "localhost";
$usuarioBD = "root";
$passBD = "";
$nombreBD = "mi_sitio";";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $conn = new mysqli($host, $usuarioBD, $passBD, $nombreBD);
    $conn->set_charset("utf8mb4");
} catch (mysqli_sql_exception $e) {
    die("Error de conexión a la base de datos.");
}
session_start();
