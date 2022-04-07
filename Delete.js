$(document).ready(function(){
  $('button').click(function(event){
  var $id=$(this).attr('id');
  var mensaje="SE ELIMINO EL REGISTRO."+$id;   
  $.ajax({
    url: 'Baibai.php',
    type: 'post',
    data:{
        'codigo': $id
    },
    success: function(dataA){
      console.log(dataA);
      alert(mensaje);
      $(this).closest('tr').remove();

    }
})


});
  });

/*$("#Productos tbody tr td button").on('click',function(event){
  var tipo=$(this).find("button").html();
  console.log(tipo);
  var mensaje="SE ELIMINO EL REGISTRO.";   
  console.log(id);
  if(tipo2){
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
})}
});*/