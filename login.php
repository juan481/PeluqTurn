<?php
        echo "";
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;700&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <header class="containerheader">
        <div class="row">
            <div class="col-4 text-left">
                <i class="bi bi-arrow-left-circle-fill fs-1 text-white"></i>
            </div>
            <div class="col-4 text-center">
                <img src="imagen/login.png" alt="Logo" class="img-fluid">
            </div>
            <div class="col-4">
                <i class="bi bi-bell-fill fs-1 text-white" style="float: right;"></i>
            </div>
        </div>
    </header>

    <main> 
    <div class="registration-form">
        <form action="signin.php" method="post"> <!-- Reemplaza "tuscript.php" con la ruta correcta a tu script PHP -->
            <div class="form-icon">
                <span><i class="bi bi-person-circle"></i></span>
            </div>
            <h4 class="text-center">¡Bienvenido!</h4>
            <div class="form-group">
                <input type="text" class="form-control item text-center" id="email" name="email" placeholder="Correo electrónico">
            </div>
            <div class="form-group text-center">
                <input type="password" class="form-control item text-center" id="password" name="password" placeholder="Contraseña">
                <a href="olv_contra.html"><h6>¿Olvidaste tu contraseña?</h6></a>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-block create-account">Ingresar</button>
            </div>
            <div class="form-group text-center">
                <a href="registro.html"><button type="button" class="btn btn-block create-account">Registrarse</button></a>
            </div>
            <div class="form-group">
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


    
</body>
</html>