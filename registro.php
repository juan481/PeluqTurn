<?php
include "bd.php";     

$conn = conectarBDUsuario(); // Obtener la conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];       
    $apellido = $_POST['apellido']; 
    $email = $_POST['email']; 
    $password = $_POST['password']; 
    $telefono = $_POST['telefono']; 

    // Hasheo de la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $filasInsertadas = agregarUsuario($conn, $apellido, $nombre, $email, $hashed_password, $telefono);

    if ($filasInsertadas > 0) {
        echo "Usuario registrado correctamente.";
    } else {
        echo "Error al registrar el usuario: " . $conn->error; // Mostrar detalles del error
    }
}

cerrarBDConexion($conn); // Cerrar la conexión al finalizar
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Aquí puedes incluir cualquier contenido de encabezado que necesites -->
    </header>

    <main>
        <div class="registration-form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-icon">
                    <span><i class="bi bi-person-circle"></i></span>
                </div>
                <h4 class="text-center">Registro</h4>
                <div class="form-group">
                    <input type="text" class="form-control item text-center" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item text-center" name="apellido" placeholder="Apellido" required>
                </div>
                <div class="form-group text-center">
                    <input type="email" class="form-control item text-center" name="email" placeholder="Correo electrónico" required>
                </div>
                <div class="form-group text-center">
                    <input type="password" class="form-control item text-center" name="password" placeholder="Contraseña" required>
                </div>
                <div class="form-group text-center">
                    <input type="text" class="form-control item text-center" name="telefono" placeholder="Teléfono" required>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-block create-account">Crear cuenta</button>
                </div>
                <div class="form-group text-center">
                    <a href="login.html" class="btn btn-block create-account">Volver al login</a>
                </div>
            </form>
            <div class="social-media">
                <h5>Te esperamos en nuestras redes</h5>
                <div class="social-icons">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap Bundle JS (incluido al final del cuerpo para mejorar el rendimiento de carga) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
