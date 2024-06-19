<?php
include "sesion.php"; // Incluye el archivo de sesión para utilizar las funciones

// Verifica si el usuario ha iniciado sesión, de lo contrario, redirige a login.php
if (!verificarSesion()) {
    header("Location: login.php");
    exit();
}

// Obtener el email de la sesión
$email = obtenerEmailSesion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Página protegida</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Bienvenido, <?php echo $email; ?></h1>
        <p>Este es el contenido protegido de tu aplicación.</p>
        <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
    </div>
</body>
</html>
