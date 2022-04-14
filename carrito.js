
/*
* Recibe el código de un producto y lo agrega al carrito de compras.
* @param {number} id_carrito - Código del carrito de compras.
* @param {number} codigo_producto - Código del producto a agregar.
*
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

//TODO: implementar esta función para la obtención del carrito por medio de AJAX

/*function show_datos(carrito){
    $.ajax({
        url: 'Mostrar_Carrito.php',
        type: 'get',
        data:{
            
        },
        success: function(data){
            alert(data);
        }
    })
}*/