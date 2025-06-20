
<?php
include "sesion.php"; // Incluye el archivo de sesión para utilizar las funciones

// Verifica si el usuario ha iniciado sesión, de lo contrario, redirige a login.php
if (verificarSesion()) {
    header("Location: login.php");
    exit();
}

// Obtener el email de la sesión
$email = obtenerEmailSesion();
?>

<!DOCTYPE html>
<html lang="en">
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
   
    <title>Menu</title>
</head>
<body>
            <header class="containerheader">
                <div class="row"> 
                    <div class="col-4 text-left">
                        
                    </div>
                    <div class="col-4 text-center"> <!-- Columna central con el logo -->
                        <!-- Coloca aquí tu logo -->
                        <img src="imagen/login.png" alt="Logo" class="img-fluid">
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            </header>

    <main>
        <!-- Inicio del cuerpo de la web -->
        <!-- Inicio del locales -->
         <div class="row">
            <div class="col-md-3 px-3 mb-3">
                <div class="card">
                    <img src="imagen/barberia.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><i class="bi bi-shop"></i> Prana peluquerías</h3>
                        <p class="card-text"><i class="bi bi-geo-alt"></i>Av. Crámer 1981, CABA</p>
                        <p class="card-text"></p>
                        <a href="local.html" class="btn btn-primary"> Reservar turno</a>
                        <a href="https://www.google.com/maps/dir//Rosario+Vera+Pe%C3%B1aloza+415,+C1107CGK,+C1107CGK,+Buenos+Aires/@-34.6184082,-58.4438217,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x95a334d08e3b1fd7:0x7de64fb769f0cff0!2m2!1d-58.3614205!2d-34.6184359?entry=ttu" class="btn btn-secondary"> Ver ubicación</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 px-3 mb-3">
                <div class="card">
                    <img src="imagen/barberia.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><i class="bi bi-shop"></i> Prana peluquerías</h3>
                        <p class="card-text"><i class="bi bi-geo-alt"></i>Av. Crámer 1981, CABA</p>
                        <p class="card-text"></p>
                        <a href="local.html" class="btn btn-primary"> Reservar turno</a>
                        <a href="https://www.google.com/maps/dir//Rosario+Vera+Pe%C3%B1aloza+415,+C1107CGK,+C1107CGK,+Buenos+Aires/@-34.6184082,-58.4438217,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x95a334d08e3b1fd7:0x7de64fb769f0cff0!2m2!1d-58.3614205!2d-34.6184359?entry=ttu" class="btn btn-secondary"> Ver ubicación</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 px-3 mb-3">
                <div class="card">
                    <img src="imagen/barberia.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><i class="bi bi-shop"></i> Prana peluquerías</h3>
                        <p class="card-text"><i class="bi bi-geo-alt"></i>Av. Crámer 1981, CABA</p>
                        <p class="card-text"></p>
                        <a href="local.html" class="btn btn-primary"> Reservar turno</a>
                        <a href="https://www.google.com/maps/dir//Rosario+Vera+Pe%C3%B1aloza+415,+C1107CGK,+C1107CGK,+Buenos+Aires/@-34.6184082,-58.4438217,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x95a334d08e3b1fd7:0x7de64fb769f0cff0!2m2!1d-58.3614205!2d-34.6184359?entry=ttu" class="btn btn-secondary"> Ver ubicación</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin del locales -->  
   
        <p></p>
    </main>

        <!-- Fin del cuerpo de la web -->


        <!-- Inicio de la barra de navegación  -->
    <footer class="fixed-bottom bg-light">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-item nav-link" href="notificacion.php"><i class="bi bi-bell fs-2"></i></a>
            <a class="nav-item nav-link active" href="index.php"><i class="bi bi-geo-alt fs-2"></i></a>
            <a class="nav-item nav-link" href="perfil.php"><i class="bi bi-person fs-2"></i></a>
        </nav>
    </footer>   
        <!-- Fin de la barra de navegación  -->

  
</body>

</html>