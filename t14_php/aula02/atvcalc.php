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
                            <label for="txtNome">Número 1</label>
                        </p>
                        <p>
                            <input type="number" id="txtN1" name="txtN1" class="form-control" required>
                        </p>
                    </div> 
                    <div class="col-sm-6">
                        <p>
                            <label for="txtNome">Número 2</label>
                        </p>
                        <p>
                            <input type="number" id="txtN2" name="txtN2" class="form-control" required>
                        </p>
                    </div> 
                </div>
                <button id="btomais" name="btomais" class="btn btn-danger" formaction="atvcalc.php">+</button>
                <button id="btomenos" name="btomenos" class="btn btn-danger" formaction="atvcalc.php">-</button>
                <button id="btovezes" name="btovezes" class="btn btn-danger" formaction="atvcalc.php">*</button>
                <button id="btodividir" name="btodividir" class="btn btn-danger" formaction="atvcalc.php">/</button>
                <hr>
                <?php
                include_once('opcalc.php');
                ?>
            </div>
        </form>
        
    <script src="js/bootstrap.js"></script>
</body>
</html>