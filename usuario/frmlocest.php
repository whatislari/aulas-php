<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local estoque</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    <?php
        include_once("locest_pesq.php");
        include_once("locest_cadas.php");
        include_once("locest_alte.php");
        include_once("locest_exclu.php");        
    ?>
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
                            <button class="btn btn-primary form-control w-25" name="btoPesquisar" formaction="frmlocest.php">&#128269;</button>
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
            <div class="row">
                <div class="col-sm-4">
                    <p>
                        <input type="text" name="txtnome" id= "txtnome" class="form-control w-30"placeholder="Insira aqui o produto">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        &nbsp;
                    </p> 
                </div>
                <div class="col-sm-4">
                    <p>
                        <select name="txtstatus" id="txtstatus" class="form-select">
                            <option value=""> --- Definir status --- </option>
                            <option value= "ATIVO" <?=($status=='ATIVO')?'Selected':'';?>>Ativo</option>
                            <option value="INATIVO" <?=($status=='INATIVO')?'Selected':'';?>>Inativo</option>
                        </select>
                    </p>
                </div>
            </div> 
            <div class="row">
                 <div class="col-sm-12">
                    <p>
                        <textarea name="txtobs" id="txtobs" rows="5" class="form-control" placeholder= "Observação"><?=$obs?></textarea>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <button class="btn btn-success" formaction="frmlocest.php" name="btocadastrar"> Cadastrar</button>
                    <button class="btn btn-info" formaction="frmlocest.php" name="btoalterar">Alterar</button>
                    <a class=" btn btn-primary" href="frmlocest.php">Limpar</a>
                    <button class="btn btn-danger" formaction="frmlocest.php" name="btoexcluir">Excluir</button>
                </div>
            </div>
        </div>
    </form>
    <script src="js/bootstrap.js"></script>

    <script>
        
    </script>
</div>