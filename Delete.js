/*
*{id} Variable tipo int que es recibida al dar click en el boton de eliminar.
*Esta variable pertenece a la columna donde se ubica dicho boton y permite identificar cual es el producto a eliminar
*{Baibai.php} Es donde se realiza el proceso de eliminar.
*/

$(document).ready(function(){
  $('button').click(function(event){
  var $id=$(this).attr('id');
  $.ajax({
    url: 'Baibai.php',
    type: 'post',
    data:{
        'codigo': $id
    },
    success: function(dataA){
      var mensaje="SE ELIMINO EL REGISTRO."+$id;   
      console.log(dataA);
      alert(mensaje);
      $(this).closest('tr').remove();

    }
})


});
  });