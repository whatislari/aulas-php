<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <form action="" method="post" class="form-control">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Calculadora</h1>
                </div>
                    <div class="col-sm-6">
                        <p>
                            <label for="txtn1">Numero 1</label>
                        </p>
                        <p>
                            <input type="number" id="txtn1" name="txtn1" class="form-control" required>
                        </p>
                    </div> 
                <div class="col-sm-6">
                    <p>
                        <label for="txtn2">Numero 2</label>
                    </p>
                    <p>
                        <input type="number" id="txtn2" name="txtn2" class="form-control" required>
                    </p>
                </div>
                    <div class="col-sm-4">
                        <p>
                            <button class="btn btn-success" formaction="pg2.php">Enviar</button>
                        </p>
                    </div>
            </div>
        </form>

<script src="js/bootstrap.js"></script>
</body>
</html>