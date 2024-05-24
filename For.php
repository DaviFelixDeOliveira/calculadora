<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Tabuada</title>
</head>
<body>

<style>
    body{
        background-color: lightgray;
    }

    .fundo{
        background-color: gray;
        position: absolute;
        left: 35%;
        font-size: 29px;
        padding: 35px;
        border: 3px solid black;
        border-radius: 20px;
    }
</style>

<div class="fundo">
<label style="font-size: 49px;">Resultado</label>
<br>_________<br>
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
--------------
</div>

</body>
</html>