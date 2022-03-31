<?php
$estatura=0;
$peso=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>IMC</title>
</head>
<body>
<h1>IMC</h1>
    <form action="" method='POST'>
        <label>Tu estatura en metros</label><br>
        <input type="text" placeholder ="ingrese estatura" name='estatura' value="" require><br><br>
        <label>Tu peso en kg</label><br>
        <input type="text" placeholder ="ingrese peso" name='peso' value = "" require><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    $estatura = $_POST['estatura'];
    $peso = $_POST['peso'];
    $imc = $peso / ($estatura^2);
    if ($imc>0 && $imc < 18.5){
        echo 'Su IMC es de: '.$imc.'<br>';
        echo '<LABEL> Estas en el nivel de delgadez</label>';
        echo '<img src="img/Bajo.png">'; 
    }elseif($imc >= 18.5 && $imc <25){
        echo 'Su IMC es de: '.$imc.'<br>';
        echo '<label> Estas en el nivel normal</label>';
        echo '<img src="img/Normal.png">'; 
    }elseif($imc >= 25 && $imc < 30){
        echo 'Su IMC es de: '.$imc.'<br>';
        echo '<label> Estas en el nivel SobrePeso</label>';
        echo '<img src="img/Sobre.png">'; 
    }elseif($imc >= 30 && $imc < 40){
        echo 'Su IMC es de: '.$imc.'<br>';
        echo '<label> Estas en el nivel Obesidad Morbida</label>';
        echo '<img src="img/NicokadoAvocado.png">'; 
    }elseif($imc >=  40){
        echo 'Buenas tu IMC es: '.$imc.'<br>';
        echo '<h4> estás en obesidad morbida papi</h3>'; 

    }
    
    ?>

</body>
</html>