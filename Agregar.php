<?php
require ('Conexion.php');

// Recibo los datos de la imagen
    $nombre_img = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['tmp_name'];
    $tamano = $_FILES['imagen']['size'];
    echo $nombre_img;
    $nombre=$_POST['nombre'];
    $codigo=$_POST['cod'];
    $cantidad=$_POST['cant'];
    $precio=$_POST['price'];
    $ruta="uploads";
    $ruta=$ruta."/".$nombre_img;
    move_uploaded_file($tipo,$ruta);
    $sql = "INSERT INTO producto values ('$codigo','$nombre','$cantidad','$precio','$ruta')";
    if(mysqli_query($conexion,$sql)){
        echo '<script language="javascript">alert("Se ha agregado correctamente");</script>';
    }
    else{
        echo '<script language="javascript">alert("JIJIJIJA");</script>';
    }
    echo $codigo,'</br>',$nombre,'</br>', $cantidad,'</br>',$precio,'</br>', $ruta;
?>