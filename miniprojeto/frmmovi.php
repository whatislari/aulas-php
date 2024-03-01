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
<?php 
            $mensagem="";
            include_once('movi_cadas.php');
            include_once('movi_alte.php');
            include_once('movi_exclu.php');
            include_once('movi_pesq.php');
        ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center p-5">
                <h1>Movimentação de produtos</h1>
            </div>
        </div>
        <form action="" method="post" class="form-control bg-secondary">
            <div class="row">
                <div class="col-sm-3">
                        <p>
                            &nbsp;
                        </p>
                        <p>
                            <input type="number" name="txtid" placeholder="Id" id="txtid" class="form-control" value="<?= $id ?>">
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
                            <select name="txtidp" id="txtidp" class="form-select"value="<?= $idp ?>">
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
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <select name="txtidf" id="txtidf" class="form-select"value="<?= $idf ?>">
                        </p>
                        <option value=""> --- Funcionario --- </option>
                                <?php
                                    include_once("conn.php");
                                    $sql = $conn -> query('select id_funcionario, nome_funcionario from funcionario');

                                    try {
                                        echo"<option value = '{$linha1[1]}'" . (($idp == $linha[0]) ? " selected" : "") . ">{$linha[1]}</option>";
                                    } 
                                    catch (PDOException $erro) 
                                    {
                                        echo $erro -> getMessage();
                                    }
                                ?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <input type="number" name="txtqtde" id= "txtqtde" class="form-control w-30"placeholder="Quantidade"value="<?= $qtde ?>">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <select name="txtmovi" id="txtmovi" class="form-select"value="<?= $movi ?>">
                        </p>
                        <option value=""> --- Movimentação --- </option>
                                <option value= "Entrada">Entrada</option>
                                <option value="Retirada">Inativo</option>
                            </select>
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <select name="txtstatus" id="txtstatus" class="form-select"value="<?= $status ?>">
                        </p>
                        <option value=""> --- Status --- </option>
                                <option value= "ATIVO">ATIVO</option>
                                <option value="INATIVO">INATIVO</option>
                            </select>
                        </p>
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
                        <button class="btn btn-success" formaction="frmmovi.php" name="btocadastrar"> Cadastrar</button>
                        <button class="btn btn-info" formaction="frmmovi.php" name="btoalterar">Alterar</button>
                        <a class=" btn btn-primary" href="frmmovi.php">Limpar</a>
                        <button class="btn btn-danger" formaction="frmmovi.php" name="btoexcluir">Excluir</button>
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