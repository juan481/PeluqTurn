<?php
include('tabla.php');
include('menu.php');
include('add_modal.php');
 

function main_page_crud(){
	
	$menu=obtenerMenu();
	$addModal=page_add();
	$tipoAlert="";
	$mensaje_error="";
	$busqueda="";
	$obtenerTabla="";
	$mensajes_de_errores="";
	$obtenerTabla="obtenerTabla";

	// Si viene una búsqueda
	if (isset($_GET['search'])){
	$busqueda=$_GET['search'];
	} 	
	
	// Manejo de los mensajes a través de la session. 
	session_start();	
	if(isset($_SESSION['message'])){
		$tipoAlert="alert-success";					
		if(isset($_SESSION['error'])){
			$tipoAlert="alert-danger";
		}
		$mensaje_error=$_SESSION['message'];
		$mensajes_de_errores=<<<ERR
			<div id="9999" class="alert alert-dismissible  {$tipoAlert} " role="alert style="margin-top:20px; ">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
				{$mensaje_error}
			</div>
		ERR;
		unset($_SESSION['message']); // elimina el mensaje de la session un ves escrito el mensaje en html
		unset($_SESSION['error']);
	}
    
	$pagina_crud=<<<PAGINA
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>PHP CRUD</title>
		<!--	-->
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>	
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
		
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

	</head>
	<body>
	<div class="container">
			{$menu}

		<h1 class="page-header text-center">PHP CRUD</h1>
		<div class="row">
			<div class="col-sm-12">

				<a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="fa fa-plus"></span> Nuevo</a>

				{$mensajes_de_errores}

				{$obtenerTabla($busqueda)}
				
			</div>
		</div>
		</div>
			{$addModal}
		</body>
		</html>	 
	PAGINA;

	echo $pagina_crud;
}
main_page_crud();

 




