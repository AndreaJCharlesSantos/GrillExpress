$('#enviar').click(regresar);

function regresar(){
    var file_data = $("#imagen").prop("files")[0];
    var n=file_data.name;   
    console.log(n);
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
        }
    })
}