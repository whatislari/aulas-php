<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio - cres e desc</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <form action="" method="post" class="form-control p-3" id="txtNotas">
        <div class="row">
            <div class="col-sm-12  text-center">
                <h1>Desafio de ordem C:</h1>
            </div>
            <div class="col-sm-6">
                <p><input type="number" placeholder="N1" name="txtN1" id="txtN1" class="form-control"></p>
            </div>
            <div class="col-sm-6">
                <p><input type="number" placeholder="N2" name="txtN2" id="txtN2" class="form-control"></p>
            </div>
            <div class="col-sm-6">
                <p><input type="number" placeholder="N1" name="txtN3" id="txtN3" class="form-control"></p>
            </div>
            <div class="col-sm-6">
                <p><input type="number" placeholder="N4" name="txtN4" id="txtN4" class="form-control"></p>
            </div>

            <p><button id="btoCalcular" name="Verificar" class="btn btn-primary form-control" formaction="desafiocresc.php">Calcular</button></p>
        </div>
        <hr>
        <div class="col-sm-12  text-center">
            <h1>Resultado C:</h1>

            <?php
            include_once('desc.php');
            ?>
        </div>
       
    </form>
  
</body>
</html>