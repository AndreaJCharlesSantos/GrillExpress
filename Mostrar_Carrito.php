<?php 

require('Conexion.php');
$sql = "SELECT * FROM carrito WHERE id_cliente=1";
mysqli_set_charset($conexion, "utf8");
if(!$result = mysqli_query($conexion, $sql)) die();

$Carrito = array(); 
while($row = mysqli_fetch_array($result)){
    $id=$row['id'];
    $id_cliente=$row['id_cliente'];
    $Carrito[] = array($id,$id_cliente);
}
$JsonProd = json_encode($Carrito,JSON_UNESCAPED_SLASHES);
foreach ($Carrito as $prod){
    $id_temp = $prod[0];
}
//if(){
    
//}

//mysqli_set_charset($conexion, "utf8");
$sql = "SELECT * FROM detalle_carito WHERE id_carrito=$id_temp";
if(!$result = mysqli_query($conexion, $sql)) die();
$Detalle_Carrito = array(); 
while($row = mysqli_fetch_array($result)){
    $id_carrito=$row['id_carrito'];
    $codigo_producto=$row['codigo_producto'];
    $Detalle_Carrito[] = array($id_carrito,$codigo_producto);
}
    $close = mysqli_close($conexion) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");

$JsonProd = json_encode($Detalle_Carrito,JSON_UNESCAPED_SLASHES);
echo $JsonProd;
  
?>