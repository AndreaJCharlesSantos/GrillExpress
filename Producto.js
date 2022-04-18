/*
* Recibe los datos ingresados en el formulario de Agregar Producto
* @param {number} id - Código del producto.
* @param {varchar} nombre - Nombre del producto.
* @param {varchar} categoria - Categoria que tiene el producto.
* @param {number} cantidad - Cantidad en existencia de un producto.
* @param {file} imagen - Es la imagen que el usuario selecciona para el producto.
*/
function enviar(){
    var nombre = $('#Nombre').val();                    
    var codigo = $('#codigo').val();                    
    var categoria = $('#categoria').val();
    var cantidad = $('#cantidad').val();                   
    var precio = $('#precio').val();                    
    var imagen = $('#imagen').prop('files')[0];    
    var form_data = new FormData();
    if (nombre === "") {
           var error = '<br><span style="color: red;">Ingrese un nombre válido.</span>';
           $('#Nombre').after($(error).fadeOut(2000));
           $('#Nombre').css( "border-color","red");
     }
     else{
        if (codigo === "") {
            var error = '<br><span style="color: red;">Ingrese un código válido.</span>';
            $('#codigo').after($(error).fadeOut(2000));
            $('#codigo').css( "border-color","red");
      }
      else{
        form_data.append("nombre",nombre);
        form_data.append("codigo",codigo);
        form_data.append("categoria",categoria);
        form_data.append("cantidad",cantidad);
        form_data.append("precio",precio);
        form_data.append("img",imagen);
        $.ajax({
            url: "Agregar.php",                      
               type: "POST",
               dataType: 'script',
               cache: false,
               contentType: false,
               processData: false,
               data: form_data,
            success:function(dat2){
              alert(dat2);
              window.location.reload(true);
            }
      });
  }
}
}

$('#act2').click(actualizar);
/*
* Recibe los datos ingresados en el formulario de Edicion Producto para modificarlo.
* @param {number} id - Código del producto.
* @param {varchar} nombre - Nombre del producto.
* @param {varchar} categoria - Categoria que tiene el producto.
* @param {number} cantidad - Cantidad en existencia de un producto.
*/
function actualizar(){
    $n=$('#Nombre').val();
    console.log($n);
    $.ajax({

        url: 'Update.php',
        type: 'post',
        dataType: 'json',
        data:{
            nombre:$('#Nombre').val(),
            codigo:$('#codigo').val(),
            categoria:$('#categoria').val(),
            cantidad:$('#cantidad').val(),
            precio:$('#precio').val()
        },
        done: function(evento){
            alert("Se actualizo el producto exitosamente");
        }
    })

}
