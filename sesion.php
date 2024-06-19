<?php
// Inicia la sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function crearSesion($clave, $valor){
    $_SESSION[$clave] = $valor;
}

function controlarSesion(){
  if(isset($_SESSION['email'])){
      echo "Sesión iniciada para: " . $_SESSION['email'];
      return $_SESSION['email'];
  } else {
      echo "No se detectó sesión iniciada. Redirigiendo a login.php...";
      header("Location: login.php"); // Redirige si no hay sesión activa
      exit();
  }
}

function cerrarSesion(){
    // Elimina todas las variables de sesión
    $_SESSION = array();

    // Si se utiliza cookies para la sesión, elimina la cookie de sesión
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Finaliza la sesión
    session_destroy();

    // Redirige a la página de inicio de sesión
    header("Location: login.php");
    exit();
}
?>
