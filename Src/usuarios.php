<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $conexion->query("INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')");

    // Corrige el uso de header
    header("Location: index.php");
    exit;
}
?>

<h1>Agregar usuario</h1>
<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <button type="submit">Guardar</button>
</form>