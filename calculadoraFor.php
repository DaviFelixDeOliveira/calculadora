<?php
    $contador;
    $numero = $_POST['numero'];
    $resultado;

    for ($contador=0; $contador <=10 ; $contador++)
    { 
        $resultado = $numero * $contador;
        echo "$numero" . " X " . "$contador " . "= " . "$resultado";
        echo "<br>";
    }
?>