$('#enviar').on('click',function(event){
	var file_data = $("#imagen").prop("files")[0];
    var n=file_data.name;   
    var mensaje="Se agrego el Producto.";
	$.ajax({
        url: 'Agregar.php',
        type: 'post',
        dataType: 'json',
        data:{
            nombre:$('#Nombre').val(),
            codigo:$('#codigo').val(),
            categoria:$('#categoria').val(),
            cantidad:$('#cantidad').val(),
            precio:$('#precio').val(),
            'img': n
        },
        success: function(dataA){
            console.log(dataA);
            alert(mensaje);
          }
    })
});


$('#act2').click(actualizar);

function actualizar(evento){
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
