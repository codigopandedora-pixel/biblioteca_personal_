<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Tienda Simple</title>
<style>
body { font-family: Arial; background: #f4f4f4; }
.container { width: 400px; margin: auto; background: white; padding: 20px; }
input, button { width: 100%; padding: 8px; margin: 5px 0; }
table { width: 100%; margin-top: 15px; border-collapse: collapse; }
td, th { border: 1px solid #ccc; padding: 5px; text-align: center; }
</style>
</head>
<body>
<div class="container">
<h2>🛒 Tienda Simple</h2>
<form action="guardar.php" method="POST">
<input type="text" name="nombre" placeholder="Nombre del producto" required>
<input type="number" step="0.01" name="precio" placeholder="Precio" required>
<button type="submit">Agregar producto</button>
</form>

<h3>Productos</h3>
<table>
<tr><th>Nombre</th><th>Precio</th></tr>
<?php
$sql = "SELECT * FROM productos";
$resultado = $conexion->query($sql);
while ($fila = $resultado->fetch_assoc()) {
    echo "<tr><td>{$fila['nombre']}</td><td>$ {$fila['precio']}</td></tr>";
}
?>
</table>
</div>
</body>
</html>