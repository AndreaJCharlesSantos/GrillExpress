<?php
require ('Conexion.php');

    $nombre=$_POST['nombre'];
    $codigo=$_POST['codigo'];
    $cantidad=$_POST['cantidad'];
    $categoria=$_POST['categoria'];
    $precio=$_POST['precio'];
    $ruta="uploads";
    $imagen=$_POST['img'];
    $ruta=$ruta."/".$imagen;
    #move_uploaded_file($tipo,$ruta);
    echo $ruta;
    $sql = "INSERT INTO producto values ('$codigo','$nombre','$cantidad','$precio','$ruta','$categoria')";
    $Producto[]=[$nombre,$codigo,$categoria,$cantidad,$precio,$ruta];
    echo json_encode($Producto, JSON_UNESCAPED_SLASHES);
    if(mysqli_query($conexion,$sql)){
        echo '<script language="javascript">alert("Se ha agregado correctamente");</script>';
    }
    else{
        echo '<script language="javascript">alert("JIJIJIJA");</script>';
    }
    echo $codigo,'</br>',$nombre,'</br>', $cantidad,'</br>',$precio,'</br>', $ruta;
    $close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
?>