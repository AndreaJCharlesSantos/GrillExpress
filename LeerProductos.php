<?php
require ('Conexion.php');
    $getdestinos = "select * from producto";
	$result = mysqli_query($conexion, $getdestinos)
		or die ("Insert Error");

	while($row = mysqli_fetch_array($result)) {
	    
	}
?>