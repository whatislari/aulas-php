<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem de serviço</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/bootstrap.js"></script>

</head>
<body>
        <?php 
            $mensagem="";
            include_once('os_cadas.php');
            include_once('os_alte.php');
            include_once('os_exclu.php');
            include_once('os_pesq.php');
        ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center p-5">
                <h1>Ordem de serviço</h1>
            </div>
        </div>
        <form action="" method="post" class="form-control bg-secondary">
            <div class="row">
                <div class="col-sm-3">
                    <p>
                        &nbsp;
                    </p>
                    <p>
                        <input type="number" name="txtid" placeholder="ID" id="txtid" class="form-control"value="<?= $id ?>">
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
                <div class="row">
                    <div class="col-sm-3">
                        <p>
                            <select name="txtidp" id="txtidp" placeholder= "Produto" class="form-select"value="<?= $idp ?>">
                        </p>
                            <option value=""> --- Produto --- </option>
                                    <?php
                                        include_once("conn.php");
                                        $sql = $conn -> query('select id_produto, nome_produto from produto');

                                        try {
                                            echo"<option value = '{$linha1[1]}'" . (($idp == $linha[0]) ? " selected" : "") . ">{$linha[1]}</option>";
                                        } 
                                        catch (PDOException $erro) 
                                        {
                                            echo $erro -> getMessage();
                                        }
                                    ?>
                            </select>
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <input type="number" name="txtqtde" id= "txtqtde" class="form-control w-30"placeholder="Quantidade"value="<?= $qtde ?>">
                        </p>
                    </div>
                    <div class="col-sm-2">
                        <p>
                            &nbsp;
                        </p> 
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <select name="txtstatus" id="txtstatus" class="form-select"value="<?= $status ?>">
                        </p>
                        <option value=""> --- Definir status --- </option>
                                <option value= "ATIVO">Ativo</option>
                                <option value="INATIVO">Inativo</option>
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
                        <button class="btn btn-success" formaction="frmpro.php" name="btocadastrar"> Cadastrar</button>
                        <button class="btn btn-info" formaction="frmpro.php" name="btoalterar">Alterar</button>
                        <a class=" btn btn-primary" href="frmpro.php">Limpar</a>
                        <button class="btn btn-danger" formaction="frmpro.php" name="btoexcluir">Excluir</button>
                    </div>
                </div>       
            </div>
        </form>
        <div class="row">
            <div class="col-sm-12 text-center">
                <?= $mensagem ?>
            </div>
        </div>
    </div>
</body>
</html>