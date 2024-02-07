<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
     <h1> Primeira Pagina php </h1>
    <hr>

    <?php

    date_default_timezone_set('America/Sao_Paulo');

    $nome = "Laricia";
    $Sobrenome = "Fontana";
    $Idade = "22";

    echo "<h2>Olá Mundo</h2>";
    echo "Olá Mundo!";
    echo "<hr>";
    echo date ("d/m/Y");
    echo "<br>";
    echo date ("H:i:s");

    echo "<hr>";
    echo " Seu nome completo é " . "$nome" . " $Sobrenome". " e sua idade é ". " $Idade" ." Anos.";

    ?>

    <script src="js/bootstrap.js"></script>
</body>
</html>