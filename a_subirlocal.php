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
   
    <title>Menu</title>
</head>
<body>

          <header class="containerheader">
            <div class="row"> 
                <div class="col-4 text-left">
                    <i class="bi bi-arrow-left-circle-fill fs-1 text-white"></i> 
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
        <div class="registration-form">
            <form>
                <div class="form-icon">
                    <span><i class="bi bi-shop"></i></span>
                </div>
                <h4 class="text">Registro de local</h4>
                <div class="form-group">
                    <input type="text" class="form-control item text-center-inline" id="local" placeholder="Nombre del local">
                </div>
                <div class="form-group text-center">
                    <input type="text" class="form-control item text-center-inline" id="ubicacion" placeholder="Ingresar dirección">
                </div>
                <div class="form-group text-center">
                    <input type="text" class="form-control item text-center-inline" id="phone-number" placeholder="Celular del local">
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Subir fotos del local</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                  </div>


                <h3>Servicios a brindar</h3>

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

                  <h3>Día de servicios</h3>

                  <div class="container">
                  
                    <div class="row">
                        <!-- Columna de Selección de Días -->
                        <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="lunes">
                            <label class="form-check-label" for="lunes">
                              <h4>Lunes </h4>
                            </label>
                          </div>
                          <!-- Puedes agregar más días de la semana aquí -->
                        </div>
                    
                        <!-- Columna de Selección de Horarios -->
                        <div class="col-md-6">
                          <h5>Horarios:</h5>
                          <div class="mb-3">
                            <label for="horaApertura" class="form-label">Hora de Apertura:</label>
                            <input type="time" class="form-control" id="horaApertura" name="horaApertura">
                          </div>
                    
                          <div class="mb-3">
                            <label for="horaCierre" class="form-label">Hora de Cierre:</label>
                            <input type="time" class="form-control" id="horaCierre" name="horaCierre">
                          </div>
                          <!-- Puedes agregar más campos de horario aquí -->
                        </div>
                      </div>

                      <div class="row">
                        <!-- Columna de Selección de Días -->
                        <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="martes">
                            <label class="form-check-label" for="martes">
                                <h4>Martes </h4>
                            </label>
                          </div>
                          <!-- Puedes agregar más días de la semana aquí -->
                        </div>
                    
                        <!-- Columna de Selección de Horarios -->
                        <div class="col-md-6">
                          <h5>Horarios:</h5>
                          <div class="mb-3">
                            <label for="horaApertura" class="form-label">Hora de Apertura:</label>
                            <input type="time" class="form-control" id="horaApertura" name="horaApertura">
                          </div>
                    
                          <div class="mb-3">
                            <label for="horaCierre" class="form-label">Hora de Cierre:</label>
                            <input type="time" class="form-control" id="horaCierre" name="horaCierre">
                          </div>
                          <!-- Puedes agregar más campos de horario aquí -->
                        </div>

                        <div class="col-md-6">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="martes">
                              <label class="form-check-label" for="miercoles">
                                <h4>Miércoles</h4>
                              </label>
                            </div>
                            <!-- Puedes agregar más días de la semana aquí -->
                          </div>

                           <!-- Columna de Selección de Horarios -->
                        <div class="col-md-6">
                            <h5>Horarios:</h5>
                            <div class="mb-3">
                              <label for="horaApertura" class="form-label">Hora de Apertura:</label>
                              <input type="time" class="form-control" id="horaApertura" name="horaApertura">
                            </div>
                      
                            <div class="mb-3">
                              <label for="horaCierre" class="form-label">Hora de Cierre:</label>
                              <input type="time" class="form-control" id="horaCierre" name="horaCierre">
                            </div>
                            <!-- Puedes agregar más campos de horario aquí -->
                          </div>

                          <div class="col-md-6">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="martes">
                              <label class="form-check-label" for="jueves">
                                <h4>Jueves</h4>
                              </label>
                            </div>
                            <!-- Puedes agregar más días de la semana aquí -->
                          </div>

                           <!-- Columna de Selección de Horarios -->
                        <div class="col-md-6">
                            <h5>Horarios:</h5>
                            <div class="mb-3">
                              <label for="horaApertura" class="form-label">Hora de Apertura:</label>
                              <input type="time" class="form-control" id="horaApertura" name="horaApertura">
                            </div>
                      
                            <div class="mb-3">
                              <label for="horaCierre" class="form-label">Hora de Cierre:</label>
                              <input type="time" class="form-control" id="horaCierre" name="horaCierre">
                            </div>
                            <!-- Puedes agregar más campos de horario aquí -->
                          </div>

                          <div class="col-md-6">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="martes">
                              <label class="form-check-label" for="viernes">
                                <h4>Viernes</h4>
                              </label>
                            </div>
                            <!-- Puedes agregar más días de la semana aquí -->
                          </div>
                           <!-- Columna de Selección de Horarios -->
                        <div class="col-md-6">
                            <h5>Horarios:</h5>
                            <div class="mb-3">
                              <label for="horaApertura" class="form-label">Hora de Apertura:</label>
                              <input type="time" class="form-control" id="horaApertura" name="horaApertura">
                            </div>
                      
                            <div class="mb-3">
                              <label for="horaCierre" class="form-label">Hora de Cierre:</label>
                              <input type="time" class="form-control" id="horaCierre" name="horaCierre">
                            </div>
                            <!-- Puedes agregar más campos de horario aquí -->
                          </div>

                          <div class="col-md-6">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="martes">
                              <label class="form-check-label" for="sabado">
                                <h4>Sábado</h4>
                              </label>
                            </div>
                            <!-- Puedes agregar más días de la semana aquí -->
                          </div>
                           <!-- Columna de Selección de Horarios -->
                        <div class="col-md-6">
                            <h5>Horarios:</h5>
                            <div class="mb-3">
                              <label for="horaApertura" class="form-label">Hora de Apertura:</label>
                              <input type="time" class="form-control" id="horaApertura" name="horaApertura">
                            </div>
                      
                            <div class="mb-3">
                              <label for="horaCierre" class="form-label">Hora de Cierre:</label>
                              <input type="time" class="form-control" id="horaCierre" name="horaCierre">
                            </div>
                            <!-- Puedes agregar más campos de horario aquí -->
                          </div>

                          <div class="col-md-6">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="martes">
                              <label class="form-check-label" for="domingo">
                                <h4>Domingo</h4>
                              </label>
                            </div>
                            <!-- Puedes agregar más días de la semana aquí -->
                          </div>
                           <!-- Columna de Selección de Horarios -->
                        <div class="col-md-6">
                            <h5>Horarios:</h5>
                            <div class="mb-3">
                              <label for="horaApertura" class="form-label">Hora de Apertura:</label>
                              <input type="time" class="form-control" id="horaApertura" name="horaApertura">
                            </div>
                      
                            <div class="mb-3">
                              <label for="horaCierre" class="form-label">Hora de Cierre:</label>
                              <input type="time" class="form-control" id="horaCierre" name="horaCierre">
                            </div>
                            <!-- Puedes agregar más campos de horario aquí -->
                          </div>



                      </div>
                      
                  
                  
                  

                <div class="form-group text-center">
                    <button type="button" class="btn btn-block create-account">Crear local</button>
                </div>
                
            </form>
            
        </div>
        <!-- Fin del locales -->  
   
        <p></p>
    </main>

        <!-- Fin del cuerpo de la web -->


        <!-- Inicio de la barra de navegación  -->
    <footer class="fixed-bottom bg-light">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-item nav-link" href="a_locales.html"><i class="bi bi-shop fs-2 "></i></a>
            <a class="nav-item nav-link active" href="a_subirlocal.html"><i class="bi bi-plus-circle fs-2 "></i></a>
            <a class="nav-item nav-link" href="a_perfil.html"><i class="bi bi-person fs-2"></i></a>
        </nav>
    </footer>
        <!-- Fin de la barra de navegación  -->

  
</body>

</html>