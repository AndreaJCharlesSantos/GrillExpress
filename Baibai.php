<?php
require ('Conexion.php');
var_dump($_POST);

$codigo=$_POST['codigo'];
$sql = "DELETE FROM  producto WHERE codigo='$codigo';";
if(mysqli_query($conexion,$sql)){
    echo '<script language="javascript">alert("Se ha agregado correctamente");</script>';
}
else{
    echo '<script language="javascript">alert("JIJIJIJA");</script>';
}
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
?>