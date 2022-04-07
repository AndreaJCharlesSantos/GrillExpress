<?php
// Iniciamos la clase del carrito
include 'User_carrito.php';
$cart = new Cart;
// include database configuration file
include 'Conexion.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['codigo'])){
        $productID = $_REQUEST['codigo'];
        // get product details
        $query = $db->query("SELECT * FROM producto WHERE codigo = ".$productID);
        $row = $query->fetch_assoc();
        $itemData = array(
            'codigo' => $row['codigo'],
            'nombre' => $row['nombre'],
            'Precio' => $row['Precio'],
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'CarritoCompra.php':'index.php';
        header("Location: ".$redirectLoc);
        //Esta es la acción para agregar productis o aumentar productos existentes en el carrito
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['codigo'])){
        $itemData = array(
            'rowid' => $_REQUEST['codigo'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
        //Esta es la acción para eliminar productos del carrito
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['codigo'])){
        $deleteItem = $cart->remove($_REQUEST['codigo']);
        // $productID = $_REQUEST['codigo'];
        header("Location: CarritoCompra.php");

        //Aquí revisa si la sesión no está vacía y el código del producto para después agregarlo a la base de datos
    }elseif(!empty($_SESSION['sessCustomerID'])  && !empty($productID['codigo'])){
        // Aquí inserta los productos a la base de datos (no lo hace, ayuda)
        $insertOrder = $db->query("INSERT INTO detalle_orden (codigo_orden, codigo_producto) VALUES ('".$_SESSION['sessCustomerID']."', '".$productID['codigo']."')");
        
        if($insertOrder){
            $orderID = $db->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO orden_compra (codigo_orden, id_cliente, total) VALUES ('".$orderID."', '".$item['id']."', '".$cart->total()."');";
            }
            // insert order items into database
            $insertOrderItems = $db->multi_query($sql);
            
            if($insertOrderItems){
                $cart->destroy();
                header("Location: index.php?id=$orderID");
            }else{
                header("Location: index.php");
            }
        }else{
            header("Location: index.php");
        }
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}