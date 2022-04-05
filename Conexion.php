<<<<<<< HEAD
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
=======
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
    echo "Conectado a la Base de Datos $bd </br>";
>>>>>>> 3710885a539277f27c718d3c64c4a14d0675f874
?>