<?php 
	require 'conexion.php';
	$valido=false;
	if(isset($_POST['aceptar']))
	{
		$usuario=$_POST['usuario'];
		$contrasena=$_POST['contrasena'];
		if(!validar($usuario,$contrasena,$conexion))
		{
			echo 'Los datos no son validos </br>';
			echo $contrasena;
			$valido=false;
		}
		else
		{
			echo 'La sesión es valida </br>';
			session_start();
			$valido=true;
			$_SESSION['usuario']=$usuario;
			header('location: index.php');
		}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<title>Acceso</title>
</head>
<body>
	<div class="contenedor">
		<form method="POST" action="/Unidad 3/roux_academy/login.php">
			<input type="text" class="form_ctrl" name="usuario" placeholder="Usuario" required="Introduce el nombre del ususario">
			<input type="password" class="form_ctrl" name="contrasena" placeholder="Contraseña" required>
			<input type="submit" class="btn" name="aceptar" value="Ingresar">
		</form>
	</div>

</body>
</html>

