$(document).ready(function(){
    $('button').click(function(event){
    $.ajax({
      url: 'eliminarcarrito.php',
      type: 'post',
      success: function(dataA){
        var mensaje="GRACIAS POR COMPRAR";   
        console.log(dataA);
        alert(mensaje);
        header("location: index3.php");  
      }
  })
  
  
  });
    });