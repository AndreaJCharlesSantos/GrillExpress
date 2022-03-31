<?php 

require 'sesionon.php';
$_SESSION=array();
session_destroy();
?>

<!DOCTYPE html>
<html><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cierre</title>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Rañeway">
</head>
<body>
	<p>
		</p><h1>Session cerrada, hasta la próxima</h1>
		<a href="login.php">Acceder</a>
	<p></p>


</body>
</html>