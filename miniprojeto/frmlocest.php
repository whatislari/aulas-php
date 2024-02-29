<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimentação</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/bootstrap.js"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center p-5">
            <h1>Local de estoque</h1>
        </div>
    </div>
    <form action="" method="post" class="form-control bg-secondary">
        <div class="row">
            <div class="col-sm-3">
                        <p>
                            &nbsp;
                        </p>
                        <p>
                            <input type="number" name="txtid" placeholder="ID" id="txtid" class="form-control" value="<?= $id ?>">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            &nbsp;
                        </p>
                        <p>
                            <button class="btn btn-primary form-control w-25" name="btoPesquisar" formaction="frmpro.php">&#128269;</button>
                        </p>
                    </div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">  
                        <p>
                            &nbsp;
                        </p>             
                        <p>
                            <input type="date" class="form-control"value="<?= $data ?>">
                        </p>
                    </div>
            </div>
        </div>  
        <div class="row">
            <div class="col-sm-6">
                <p>
                    <input type="text" name="txtnome" id= "txtnome" class="form-control w-30"placeholder="Insira aqui o produto">
                </p>
            </div>
        </div>      
    </form>
</div>    


</body>
</html>