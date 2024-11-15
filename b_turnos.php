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
   
    <title>Local</title>
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
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tarjeta 1</h5>
          <p class="card-text">Detalles de la tarjeta 1.</p>
          <button class="btn btn-primary" data-toggle="modal" data-target="#confirmarModal1">Confirmar</button>
          <button class="btn btn-primary" data-toggle="modal" data-target="#confirmarModal1">Cancelar</button>
        </div>
      </div>
    </main>
    </body>




    <footer class="fixed-bottom bg-light">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-item nav-link active" href="b_turnos.html"><i class="bi bi-ticket-perforated fs-2"></i></i></a>
            <a class="nav-item nav-link" href="b_locales.html"><i class="bi bi-shop fs-2 "></i></a>
            

        </nav>
    </footer>
    <!-- Fin de la barra de navegación  -->


</body>

</html>