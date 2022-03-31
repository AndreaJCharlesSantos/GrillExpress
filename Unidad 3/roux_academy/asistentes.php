<?php 
include('R/Hed.php');
require('Conexion.php');

function oreg($conexion){
    $query = "SELECT * FROM registros";
    $resultado = mysqli_query($conexion, $query) or die('Error al ejecutar la consulta');
    if( $resultado ){

        //Ahora valida que la consuta haya traido registros
        if( mysqli_num_rows( $resultado ) > 0){
            echo "<table bordered>";
            echo "<tr>";
            echo "<th>Nombre</th>";
            echo "<th>Correo</th>";
            echo "<th>Compañia</th>";
            echo "<th>Comentario</th>";
            echo "<th>Fuente</th>";
            
          while($fila = mysqli_fetch_array( $resultado ) ){
            $nomb=$fila['Nombre'];
            $cor=$fila['Correo'];
            $com=$fila['Compañia'];
            $comen=$fila['Comentario'];
            $fu=$fila['Fuente'];
                
                echo "<tr>";
                echo "<td>$nomb</td>";
                echo "<td>$cor</td>";
                echo "<td>$com</td>";
                echo "<td>$comen</td>";
                echo "<td>$fu</td>";
                echo "</tr>";
        
            // Close the table
        }
        echo "</table>";
        //Recuerda liberar la memoria del resultado, 
        mysqli_free_result( $resultado );
      }
}
}

?>



<link rel="stylesheet" href="./Estilos/Stile_A.css">

<div class="Area">

    <H1>REGISTRO DE ASISTENTES AL EVENTO</H1>
    <?php
    oreg($conexion)
    ?>
</div>


<?php 

require('R/Foot.php');

?>