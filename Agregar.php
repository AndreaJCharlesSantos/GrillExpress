<?php
require ('Conexion.php');
error_reporting(0);

    /*
    *Esta sección recibe los datos del formulario del producto nuevo, para despues insertarlos en la 
    *tabla de Productos.
    *Antes de insertarlos, guarda la imagen en la carpeta del servidor "Uploads"
    *Si se inserta correctamente, manda mensaje donde informa el estado al usuario
    *Si hay un error, lo notifica al usuario.
    */
    try{
    $nombre=$_POST['nombre'];
    $codigo=$_POST['codigo'];
    $cantidad=$_POST['cantidad'];
    $categoria=$_POST['categoria'];
    $precio=$_POST['precio'];
    $ruta="uploads";
    $imagen=$_FILES['img']['name'];
    $target_file = $ruta.basename($_FILES["img"]["name"]);
    $filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $newfilename = $imagen;
    if(move_uploaded_file($_FILES["img"]["tmp_name"],$ruta.'/'.$newfilename)){ 
    $ruta=$ruta."/".$imagen;
    #move_uploaded_file($tipo,$ruta);
    $sql = "INSERT INTO producto values ('$codigo','$nombre','$cantidad','$precio','$ruta','$categoria')";
    $Producto[]=[$nombre,$codigo,$categoria,$cantidad,$precio,$ruta];
    if(mysqli_query($conexion,$sql)){
        echo 'El producto se agrego exitosamente';  
    }
    else{
        echo 'El sistema ya esta usando este código, porfavor ingrese uno nuevo';  
    }
    $close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");}
    }
    catch(Exception $ex)
    {
        echo 'EL SISTEMA ESPERABA LOS DATOS NECESARIOS.';
    }
?>