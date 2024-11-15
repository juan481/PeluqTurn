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
        <p></p>

         <!-- Inicio del local -->
         <!-- Inicio del Slider -->
         <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imagen/slider1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imagen/slider2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imagen/slider3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- Fin del Slider -->

          <div class="hsubi">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center text-center">
                        <i class="bi bi-clock-fill fs-1 text-primary mr-3 text-center"></i> <!-- Icono -->
                        <p>10AM - 14PM / 16PM - 20 PM </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex align-items-center">
                        <i class=""></i> <!-- Icono -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d345.12784445744376!2d-58.36115271633629!3d-34.618635619682266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1698688723019!5m2!1ses!2sar" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>


          <div class="container">
            <div class="caracteristicas">
              <h3>Especialidades</h3>
                <div class="container">
                  <div class="row">
                      <div class="col-4">
                          <div class="card">
                              <div class="card-body">
                                <span class="bi bi-scissors fs-1 col-4"></span>
                                <p>Corte</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-4">
                          <div class="card">
                            <div class="card-body">
                              <span class="bi bi-scissors fs-1 col-4"></span>
                              <p>Corte</p>
                            </div>
                          </div>
                      </div>
                      <div class="col-4">
                          <div class="card">
                            <div class="card-body">
                              <span class="bi bi-scissors fs-1 col-4"></span>
                              <p>Corte</p>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>

            <div class="caracteristicas">
                <div class="container">
                  <div class="row">
                      <div class="col-4">
                          <div class="card">
                              <div class="card-body">
                                <span class="bi bi-scissors fs-1 col-4"></span>
                                <p>Corte</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-4">
                          <div class="card">
                            <div class="card-body">
                              <span class="bi bi-scissors fs-1 col-4"></span>
                              <p>Corte</p>
                            </div>
                          </div>
                      </div>
                      <div class="col-4">
                          <div class="card">
                            <div class="card-body">
                              <span class="bi bi-scissors fs-1 col-4"></span>
                              <p>Corte</p>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>








    <!-- Fin del locales -->  
       <!-- Inicio pedir turno -->  
       <div class="registration-form">
            
        <div class="form-group text-center">
           <a href="turno.html"> <button type="button" class="btn btn-block create-account">Solicitar turno</button></a>
        </div>
        
       
    
       </div>
         <!-- Fin pedir turno --> 
    <!-- Fin del cuerpo de la web -->

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