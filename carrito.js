
/*
* Recibe el código de un producto y lo agrega al carrito de compras.
* @param {number} codigoProducto - Código del producto a agregar.
* @param {number} codigoOrden - Código de la orden a agregar.
* Me falta el dato de la tabla orden_compra 
*/
function enviar(codigo){
    $.ajax({
        url: 'AccionCarta.php',
        type: 'post',
        data:{
            'codigoP': codigo
        },
        success: function(dataA){
          alert(dataA);
    
        }
    })
}