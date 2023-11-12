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
   
    <title>Registro</title>
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
        <div class="registration-form">
            <form>
                <div class="form-icon">
                    <span><i class="bi bi-person-circle"></i></span>
                </div>
                <h4 class="text-center">Perfil</h4>
                <div class="form-group text-center">
                    <p>Nombre y Apellido</p>
                    <input type="text" class="form-control item text-center" id="username" placeholder="Brian López">
                </div>
                <div class="form-group text-center">
                    <p>Contraseña</p>
                    <input type="password" class="form-control item text-center" id="password" placeholder="******">
                </div>
                <div class="form-group text-center">
                    <p>Email</p>
                    <input type="text" class="form-control item text-center" id="email" placeholder="brianlopez@gmail.com">
                </div>
                <div class="form-group text-center">
                    <p>Teléfono</p>
                    <input type="text" class="form-control item text-center" id="phone-number" placeholder="1124527669">
                </div>

                <div class="form-group text-center">
                    <button type="button" class="btn btn-block create-account">Editar perfil</button>
                </div>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-block create-account"><a href="login.html">Salir de la cuenta</button></a>
                </div>
            </form>
            <div class="social-media">
                <h5>♥ Gracias por utilizar PeluqTurn ♥</h5>
            </div>
        </div>
            </form>
    </main>
    </body>




    <footer class="fixed-bottom bg-light">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-item nav-link" href="notificacion.php"><i class="bi bi-bell fs-2"></i></a>
            <a class="nav-item nav-link" href="index.php"><i class="bi bi-geo-alt fs-2"></i></a>
            <a class="nav-item nav-link active" href="perfil.php"><i class="bi bi-person fs-2"></i></a>
        </nav>
    </footer>
            <!-- Fin de la barra de navegación  -->
    <!-- Fin de la barra de navegación  -->


</body>

</html>