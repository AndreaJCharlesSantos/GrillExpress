<?php
require ('Conexion.php');

    $nombre=$_POST['nombre'];
    $codigo=$_POST['codigo'];
    $cantidad=$_POST['cantidad'];
    $categoria=$_POST['categoria'];
    $precio=$_POST['precio'];
    $sql = "UPDATE  producto set nombre='$nombre', Cantidad='$cantidad', Precio='$precio', categoria='$categoria' WHERE codigo='$codigo';";
    if(mysqli_query($conexion,$sql)){
        echo '<script language="javascript">alert("Se ha agregado correctamente");</script>';
    }
    else{
        echo '<script language="javascript">alert("JIJIJIJA");</script>';
    }
    $close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
?>