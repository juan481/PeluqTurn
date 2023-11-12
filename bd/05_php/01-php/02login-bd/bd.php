<?php
  function conectarBDUsuario(){   
    // Datos para conectar a la base de datos.
    $nombreServidor      = "localhost";
    $nombreUsuario       = "root";
    $passwordBaseDeDatos = "";
    $nombreBaseDeDatos   = "bd_usuario";

    // Crear conexión con la base de datos.
    // https://www.w3schools.com/php/php_ref_mysqli.asp
    // https://www.php.net/manual/es/class.mysqli-sql-exception.php
    mysqli_report(MYSQLI_REPORT_STRICT);
    try {
        $conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);      
    } catch (Exception $e) {
        echo 'ERROR:'.$e->getMessage();
        $conn=NULL;
    }   
    return $conn;
  }

  function cerrarBDConexion($conn){
    if ($conn!=NULL){
        $conn->close();
    }    
  }

  function consultarUsuario($conn,$email,$password){
    $resultado = NULL;
    if ($conn!=NULL){
        // Confección del string de la Consulta segura para evitar inyecciones SQL.
        $formato = "SELECT * FROM usuario WHERE email='%s' AND password = '%s'";
        $email=$conn->real_escape_string($email);         //filtra
        $password = $conn->real_escape_string($password); //filtra
        $sql = sprintf($formato, $email, $password);      // rearma con formato
        // Ejecución la consulta SQL.
        //echo($sql);die();
        $resultado = $conn->query($sql);
    }
    return $resultado;
  }

?>