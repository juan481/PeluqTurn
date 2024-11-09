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
   
    <title>Turno</title>
</head>
<body>
          <header class="containerheader">
            <div class="row"> 
                <div class="col-4 text-left">
                    <i class="bi bi-arrow-left-circle-fill fs-1 text-white" onclick="window.location.href='index.html'"></i> 
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
        <h2>Prana peluquerías</h2>
        <h5>Seleccionar día:</h5>
          <select class="form-select" aria-label="Default select example">
            <option selected>Seleccionar</option>
            <option value="1">Lunes</option>
            <option value="2">Martes</option>
            <option value="3">Miercoles</option>
            <option value="4">Jueves</option>
            <option value="5">Viernes</option>
            <option value="6">Sábado</option>
            <option value="7">Domingo</option>
          </select>

          <div class="containerhora">
    
            <div class="col-md-6">
              <h5>Horarios:</h5>
              <div class="mb-3">
                <label for="horaApertura" class="form-label">Seleccionar hora de turno:</label>
                <input type="time" class="form-control" id="horaturno" name="horaApertura">
              </div>
            </div>
            
      

    <!-- Fin del cuerpo de la web -->
    <h3>Servicio</h3>

    <div class="form-check form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Corte </label>
    </div>
    <div class="form-check form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Color </label>
    </div>
    <div class="form-check form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Barbería </label>
    </div>
    <div class="form-check form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
       Tinturas </label>
    </div>
    <div class="form-check form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
       Peinado </label>
    </div>
    <div class="form-check form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
       Alisado </label>
    </div>


    <div class="registration-form">
      <div class="form-group text-center">
         <a href="enproceso.html"><button type="button" class="btn btn-block create-account">Solicitar turno</button></a>
      </div>
     </div>

    </main>
        


        <!-- Inicio de la barra de navegación  -->
        <footer class="fixed-bottom bg-light">
          <nav class="nav nav-pills nav-justified">
              <a class="nav-item nav-link" href="notificacion.html"><i class="bi bi-bell fs-2"></i></a>
              <a class="nav-item nav-link active" href="index.html"><i class="bi bi-geo-alt fs-2"></i></a>
              <a class="nav-item nav-link" href="perfil.html"><i class="bi bi-person fs-2"></i></a>
          </nav>
      </footer>
        <!-- Fin de la barra de navegación  -->

  
</body>

</html>