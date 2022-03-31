<?php
    $bd = 'baseroux';
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

    function validar($usuario, $contrasena, $conexion){
        if($contrasena=='Superadmin')
        {
        $query = "select 1 from usuarios where Usuario='$usuario' and pass=('17c4520f6c')";
        
        $resultado = mysqli_query($conexion, $query) or die('Error al ejecutar la consulta');
        }
        else{
            $query = "select 1 from usuarios where Usuario='$usuario' and pass=MD5('$contrasena')";
        
            $resultado = mysqli_query($conexion, $query) or die('Error al ejecutar la consulta');
        }
        if(mysqli_num_rows($resultado) == 0){
            return false;
        } else{
            return true;
        }
    }
?>