<?php

include "bd.php";     //https://www.w3schools.com/php/php_includes.asp
include "sesion.php";
  //session_start();
function main(){
  // Obtengo los datos cargados en el formulario de signin.
  $email = $_POST['email'];       //"mariano@gmail.com";
  $password = $_POST['password']; //"1234";

  // abrir conexión a base de datos, en este caso 'bd_usuario'
  $conn = conectarBDUsuario();
  // Ejecutar consulta
  $resultado = consultarUsuario($conn,$email,$password);
  // cerrar conexión '$conn' de base de datos
  
  if($resultado!=NULL && $resultado->num_rows>0){  
    crearSesion('email', $email); // crea sesion y redirige
  }else{
    echo 'El email o password es incorrecto, <a href="signin.html">vuelva a intenarlo</a>.<br/>';
  }
}
main();
?>