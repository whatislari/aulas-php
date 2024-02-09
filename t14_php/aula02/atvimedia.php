<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container text-center">
        <form action="" method="post" class="form-control p-3" id="txtNotas">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Média escolar</h1>
                </div>
                <hr>
                <div class="col-sm-4">
                    <p><input type="text" placeholder="Notinha 1" name="txtN1" id="txtN1" class="form-control notas"></p>
                    <p><input type="text" placeholder="Notinha 2" name="txtN2" id="txtN2" class="form-control notas"></p>
                    <p><input type="text" placeholder="Notinha 3" name="txtN3" id="txtN3" class="form-control notas"></p>
                    <p><input type="text" placeholder="Notinha 4" name="txtN4" id="txtN4" class="form-control notas"></p>
                    <p><button id="btoCalcular" name="btoCalcular" class="btn btn-primary form-control" formaction="atvimedia.php">Calcular</button></p>
                    <hr>
                    <hr>
                    <?php
                    include_once('opmedia.php');
                    ?>
                </div>
            </div>
        </form>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>