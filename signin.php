<?php
include "bd.php";     // Incluir archivo de conexión a la base de datos
include "sesion.php"; // Incluir archivo de funciones de sesión

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Conectar a la base de datos
    $conn = conectarBDUsuario();

    // Consultar usuario con las credenciales ingresadas
    $resultado = consultarUsuario($conn, $email, $password);

    // Cerrar conexión a la base de datos
    cerrarBDConexion($conn);

    // Si se encontró un usuario con las credenciales proporcionadas
    if ($resultado != NULL && $resultado->num_rows > 0) {
        // Crear sesión para el usuario
        crearSesion('email', $email);

        // Redirigir a la página principal o a donde corresponda
        header("Location: index.php");
        exit();
    } else {
        // Si las credenciales son incorrectas, mostrar mensaje de error
        $_SESSION['error'] = 'El email o contraseña ingresados son incorrectos.';
        header("Location: login.php");
        exit();
    }
}
?>
