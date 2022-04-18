<?php
require('Conexion.php');
//Codigo que consume la tabla de productos y selecciona todos ellos
$sql = "SELECT * FROM producto";
mysqli_set_charset($conexion, "utf8");
if(!$result = mysqli_query($conexion, $sql)) die();
$Productos = array(); 
while($row = mysqli_fetch_array($result)) 
{ 
	$codigo=$row['codigo'];
	$nombre=$row['nombre'];
	$categoria=$row['categoria'];
	$Precio=$row['Precio'];
	$Cantidad=$row['Cantidad'];
    $Imagen=$row['Imagen'];

	#$Productos[] = array('codigo'=> $codigo, 'nombre'=> $nombre, 'categoria'=> $categoria, 'Precio'=> $Precio, 'Cantidad'=> $Cantidad,'Imagen'=> $Imagen);
	$Productos[] = array($codigo,$nombre,$categoria,$Precio,$Cantidad,$Imagen);
}
	$close = mysqli_close($conexion) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  
$JsonProd = json_encode($Productos,JSON_UNESCAPED_SLASHES);
echo $JsonProd;
?>