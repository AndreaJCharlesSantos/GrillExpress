/*function CargarTabla(){
    $.ajax({

    }).done(

    )
}
*/

function getdestinos() {
    var destinos;
   
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        //document.getElementById("get").innerHTML = this.responseText;
        destinos = this.responseText;
      }
    };
    xhttp.open("GET", "../LeerProductos.php", true);
    xhttp.send();
  }