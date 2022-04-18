<?php

/*
* Aquí realizamos la acción de adición a la base de datos: "detalle_carito" 
* 
*/
require ('Conexion.php');
var_dump($_POST);
$codigoP=$_POST['codigoP'];
$usuario=$_POST['usuario'];
// $codigoO=$_POST['codigoO'];
echo ($codigoP);
echo ($usuario);
$presql= "SELECT id FROM carrito where id_cliente='$usuario'";
$resultado=mysqli_query($conexion,$presql);
$idcarrito=mysqli_fetch_array($resultado);
$id=$idcarrito['id'];
$sql = "INSERT INTO detalle_carito (id_carrito,codigo_producto) VALUES ('$id','$codigoP');";
if(mysqli_query($conexion,$sql)){
    echo '<script language="javascript">alert("Se ha agregado correctamente");</script>';
}
else{
    echo '<script language="javascript">alert("Hubo un error");</script>';
}
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
?>