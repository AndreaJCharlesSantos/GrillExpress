<?php
    $bd = 'grill';
    $servidor = 'localhost';
    $usuario='root';
    $contrasena='';
    
    #Creamos una conexión a la base de datos
    $conexion=mysqli_connect($servidor,$usuario,$contrasena,$bd);

    #Checamos la conexión
    if(!$conexion){
        die('Conexión a la base de datos ' . $bd . ' falló: ' . mysqli_connect_error());
    }
?>