<?php 
/* A continuación, realizamos la conexión con nuestra base de datos en MySQL */ 
$bd = 'grill';
    $servidor = 'localhost';
    $usuario='root';
    $contrasena='';
    var_dump($_POST);
    #Creamos una conexión a la base de datos
    $conexion=mysqli_connect($servidor,$usuario,$contrasena,$bd);

    #Checamos la conexión
    if(!$conexion){
        die('Conexión a la base de datos ' . $bd . ' falló: ' . mysqli_connect_error());
    }
    echo "Conectado a la Base de Datos $bd </br>";

$correo=$_POST['c'];
$contra=$_POST['contrasena'];


 //El query valida si el usuario ingresado existe en la base de datos. Se utiliza la función htmlentities para evitar inyecciones SQL.
$myusuario = mysqli_query($conexion,"select correo from usuario where correo = '".$correo."'"); 
$nmyusuario = mysqli_num_rows($myusuario); 

//Si existe el usuario, validamos también la contraseña ingresada y el estado del usuario... 

if($nmyusuario != 0)
{ 
  $sql = "select * from usuario where correo = '".$correo."' and contraseña = '".$contra."'"; 
  $myclave = mysqli_query($conexion, $sql) or die ('Error: '. mysqli_error($conexion)); 
  $nmyclave = mysqli_num_rows($myclave); 
  $fila = mysqli_fetch_row($myclave);
  echo $fila[3];
  echo $fila[5];

  #$correo1 = $myclave[0];

  
  //Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD), creamos la sesión del mismo. 
  if($nmyclave != 0)
  { 
      session_start(); 
      //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 
      $_SESSION["autentica"] = "SIP"; 
      $_SESSION["usuarioactual"] = $fila[1]; 
      //nombre del usuario logueado. 
      //Direccionamos a nuestra página principal del sistema. 
      if($fila[1] === 'Admin'){
        header ("Location: index2.php"); 
      }else{
      header ("Location: index.php"); 
    }
   }
   else{ 
     echo"<script>alert('La contrase\u00f1a del usuario no es correcta.'); window.location.href=\"index.php\"</script>"; 
     
   } 
}
else
{ 
    echo"<script>alert('El usuario no existe.'); </script>"; 
} 
mysql_close($conexion); 
?>