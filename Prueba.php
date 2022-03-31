<?php
    $nombre_img = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['tmp_name'];
    $tamano = $_FILES['imagen']['size'];
    $ruta="uploads";
    $ruta=$ruta."/".$nombre_img;
    move_uploaded_file($tipo,$ruta);
    echo $nombre_img, $tipo,$tamano,$ruta;
?>