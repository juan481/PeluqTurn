<?php
        echo "";
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
   
    <title>Menú</title>
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

     <!-- Inicio del cuerpo de la web -->
    <main>
        <div class="text-center">
        <i class="bi bi-clock" style="font-size:100px"></i>
            <h1 class="text-center">Tu solicitud a sido recibida, te notificaremos a la brevedad.</h1>
        </div>

        <div class="form-group text-center">

            <div class="registration-form">
            <a href="notificacion.html"><button type="button" class="btn btn-block create-account">Ir a notificaciones</button> </a>
        </div>
    </div>


    </main>
        
    


        <!-- Inicio de la barra de navegación  -->
        <footer class="fixed-bottom bg-light">
            <nav class="nav nav-pills nav-justified">
                <a class="nav-item nav-link active" href="notificacion.html"><i class="bi bi-bell fs-2"></i></a>
                <a class="nav-item nav-link" href="index.html"><i class="bi bi-geo-alt fs-2"></i></a>
                <a class="nav-item nav-link" href="perfil.html"><i class="bi bi-person fs-2"></i></a>
            </nav>
        </footer>
        <!-- Fin de la barra de navegación  -->

  
</body>

</html>