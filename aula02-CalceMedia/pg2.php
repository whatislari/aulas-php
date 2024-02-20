<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
        <div class="container">
            <form action="" method="post" class="form-control">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Formulario Simples</h1>
                    </div>
                        <div class="col-sm-6">
                            <p>
                                <label for="txtNome">Informe seu Nome</label>
                            </p>
                            <p>
                                <input type="text" id="txtNome" name="txtNome" class="form-control" required>
                            </p>
                        </div> 
                    <div class="col-sm-6">
                        <p>
                            <label for="txtSobrenome">Informe seu Sobrenome</label>
                        </p>
                        <p>
                            <input type="text" id="txtSobrenome" name="txtSobrenome" class="form-control" required>
                        </p>
                    </div>
                        <div class="col-sm-4">
                            <p>
                                <button class="btn btn-success" formaction="pg2.php">Enviar</button>
                            </p>
                        </div>
                </div>
            </form>
            <hr>
                <?php

                    // print_r($_POST);
                    if($_POST){

                        $Nome = $_POST['txtNome'];
                        $Sobrenome = $_POST['txtSobrenome'];

                        echo "Seu nome completo é "  .$Nome." ".$Sobrenome;
                    }
                ?>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>