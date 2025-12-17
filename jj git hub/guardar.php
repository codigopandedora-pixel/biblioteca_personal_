<?php
include("conexion.php");
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$sql = "INSERT INTO productos (nombre, precio) VALUES ('$nombre', '$precio')";
$conexion->query($sql);
header("Location: index.php");
?>