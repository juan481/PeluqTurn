<?php

function conectarBDUsuario(){   
    // Datos para conectar a la base de datos.
    $nombreServidor = "localhost";
    $nombreUsuario = "root";
    $passwordBaseDeDatos = "";
    $nombreBaseDeDatos = "bd";

    // Crear conexión con la base de datos.
    mysqli_report(MYSQLI_REPORT_STRICT);
    try {
        $conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);      
    } catch (Exception $e) {
        echo 'ERROR:'.$e->getMessage();
        $conn = NULL;
    }   
    return $conn;
}

function cerrarBDConexion($conn){
    if ($conn != NULL){
        $conn->close();
    }    
}

function consultarUsuario($conn, $email, $password){
    $resultado = NULL;
    if ($conn != NULL){
        // Confección del string de la Consulta segura para evitar inyecciones SQL.
        $formato = "SELECT * FROM usuario WHERE email='%s' AND password='%s'";
        $email = $conn->real_escape_string($email);         // Filtra
        $password = $conn->real_escape_string($password);   // Filtra
        $sql = sprintf($formato, $email, $password);        // Rearma con formato
        // Ejecución de la consulta SQL.
        $resultado = $conn->query($sql);
    }
    return $resultado;
}

function verificarEmail($conn, $email){
    $resultado = NULL;
    if ($conn != NULL){
        // Confección del string de la Consulta segura para evitar inyecciones SQL.
        $formato = "SELECT * FROM usuario WHERE email='%s'";
        $email = $conn->real_escape_string($email);         // Filtra
        $sql = sprintf($formato, $email);                   // Rearma con formato
        // Ejecución de la consulta SQL.
        $resultado = $conn->query($sql);
    }
    return $resultado;
}

function agregarUsuario($conn, $apellido, $nombre, $email, $password, $telefono){
    $filasAfectadas = 0;
    if ($conn != NULL){     
        /* Crear una sentencia preparada */
        if ($stmt = $conn->prepare("INSERT INTO usuario (apellido, nombre, email, password, telefono, tipo_usuario) VALUES (?, ?, ?, ?, ?, 'usuario')")) {
            /* Ligación de parámetros para marcadores */
            $stmt->bind_param('sssss', $apellido, $nombre, $email, $password, $telefono);
            /* Ejecutar la consulta */
            $stmt->execute();
            /* Obtener la cantidad de filas afectadas en la inserción */
            $filasAfectadas = $stmt->affected_rows;
            /* Cerrar la sentencia */
            $stmt->close();
        }
    }
    return $filasAfectadas;
}

function consultaDatosUsuario($conn, $email){
    $resultado = NULL;
    if ($conn != NULL){
        // Confección del string de la Consulta segura para evitar inyecciones SQL.
        $formato = "SELECT * FROM usuario WHERE email='%s'";
        $email = $conn->real_escape_string($email);         // Filtra
        $sql = sprintf($formato, $email);                   // Rearma con formato
        // Ejecución de la consulta SQL.
        $res_msqli = $conn->query($sql); // Respuesta en formato mysqli

        /* Obtener un array asociativo */
        $resultado = $res_msqli->fetch_assoc();

        /* Liberar el conjunto de resultados */
        $res_msqli->free();
    }
    return $resultado;
}

function actualizarUsuario($conn, $email, $password, $apellido, $nombre){
    $filasAfectadas = 0;
    if ($conn != NULL){     
        /* Crear una sentencia preparada */
        if ($stmt = $conn->prepare("UPDATE usuario SET apellido = ?, nombre = ? WHERE email = ? AND password = ?")) {
            /* Ligación de parámetros para marcadores */
            $stmt->bind_param('ssss', $apellido, $nombre, $email, $password);
            /* Ejecutar la consulta */
            $stmt->execute();
            /* Obtener la cantidad de filas afectadas en la inserción */
            $filasAfectadas = $stmt->affected_rows;
            /* Cerrar la sentencia */
            $stmt->close();
        }
    }
    return $filasAfectadas;
}

?>
