$("#Productos tbody tr").on('click',function(event){
  var id= $(this).find("td:first-child").html();
  var mensaje="SE ELIMINO EL REGISTRO.";   
  $.ajax({

    url: 'Baibai.php',
    type: 'post',
    data:{
        'codigo': id
    },
    success: function(dataA){
      console.log(dataA);
      alert(mensaje);
      $(this).closest('tr').remove();

    }
})
});