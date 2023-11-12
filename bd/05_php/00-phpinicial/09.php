<?php
    include 'BaseDatos.php';  // importar el módulo 

    function strConsulta(){
        $listaCodigo = "(3,4,5,6,7)";
        $tabla = "pais";

        $sql   = "select * from $tabla where id in $listaCodigo ;";
        //$sql = "select * from pais where id in (3,4,5,6)";

        return $sql;
    }

    function imprimirConsulta($result){
        //print(var_dump ($result));           // descomentar por si quiero debuguear
        //die();                               // descomentar por si quiero debuguear
        while ($fila = $result->fetch_assoc()) {             // http://php.net/manual/es/mysqli-result.fetch-assoc.php
            echo ( $fila["id"].",". $fila["nombre"]."</br>");
        } 
    }

    function main(){
        $conn   = conectarBD();              // conecta a la base de datos
        $sql    = strConsulta();             // carga el texto con la consulta sql
        $result = ejecutarSQL($conn, $sql ); // ejecuta la consulta sql
        imprimirConsulta($result);           // imprime el resultado de la consulta
        desconectarBD($conn);                // desconecta la base de datos
    }

    main();

?>




