<?php
include ('Conexion.php');
session_start();
$_USER = $_SESSION['id'];
$presql= "SELECT id FROM carrito where id_cliente='$_USER'";
$resultado=mysqli_query($conexion,$presql);
$idcarrito=mysqli_fetch_array($resultado);
$id=$idcarrito['id'];
$sql = "DELETE FROM  detalle_carito WHERE id_carrito='$id'";
if(mysqli_query($conexion,$sql)){
    echo '<script language="javascript">alert("GRACIAS POR COMPRAR");</script>';
}
else{
    echo '<script language="javascript">alert("UNU");</script>';
}
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
?>