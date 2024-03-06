<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ItemEstoque</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

    <?php 
            include_once('itesdados.php');   
    ?>
    
    <div class="container">
        <form action="" method="post" class="form-control p-3 bg-secondary">
             <div class="row">
                <div class="col-sm-12">
                    <hr>
                    <b style="text-align:center;"><h2>Item Estoque</h2></b>
                    <hr>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <p>
                        <input type="number" name="id" id="id" class="form-control" value="<?= $id;?>" placeholder="ID" >
                    </p>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-secondary " name="pesq" formaction="initial.php?tela=itemest">
                        &#x1F50D;
                    </button>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <input type="date" name="data" id="data" class="form-control" value="<?= $data;?>">
                </div>
    
                <div class="row">
                    <div class="col-sm-3">
                        <p>
                            <select name="idp" id="idp" class="form-select">
                                <option value=""> -- Produto --</option>
                                <?php
                                    include_once('conn.php');
                                    $sql = $conn->query('select ID_Produto, nome_Produto from produto');

                                    try {
                                        foreach ($sql as $linha) {
                                            echo "<option value='{$linha[0]}'" . (($idp == $linha[0]) ? " selected" : "") . ">{$linha[1]}</option>";
                                        }
                                    } catch (PDOException $erro) {
                                        echo $erro->getMessage();
                                    }
                                    ?>
                            </select>
                        </p>
                    </div>

                    <div class="col-sm-3">
                        <p>
                            <select name="idl" id="idl" class="form-select">
                                <option value=""> -- Armazém --</option>
                                <?php
                                    include_once('conn.php');
                                    $sql = $conn->query('select id_LocalEstoque, nome_LocalEstoque from localestoque');

                                    try {
                                        foreach ($sql as $linha) {
                                            echo "<option value='{$linha[0]}'" . (($idl == $linha[0]) ? " selected" : "") . ">{$linha[1]}</option>";
                                        }
                                    } catch (PDOException $erro) {
                                        echo $erro->getMessage();
                                    }
                                    ?>
                            </select>
                        </p>
                    </div>
                    
                    <div class="col-sm-3">
                    
                        <p>
                            <select name="sts" id="sts" class="form-select w-50">
                                <option value=""> -- Status -- </option>
                                <option value="ATIVO" <?= ($sts == "ATIVO") ? "selected" : "" ?>>ATIVO</option>
                                <option value="INATIVO" <?= ($sts == "INATIVO") ? "selected" : "" ?>>INATIVO</option>
                            </select>
                        </p>
                    </div>
            </div>
                
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <label for="obs">Observação</label>
                    </p>
                    <textarea name="obs" id="obs" rows="10" class="form-control"><?= $obs;?></textarea>
                    <br>
                </div>
                <div class="col-sm-12 text-end">
                    <button class="btn btn-success" formaction="frmites.php" name="btocadastrar" onclick="Enviar('Cad')"> Cadastrar</button>
                    <button class="btn btn-info" formaction="frmites.php" name="btoalterar" onclick="Enviar('Alt')">Alterar</button>
                    <a class=" btn btn-primary" href="frmites.php" onclick="Limpar();">Limpar</a>
                <button class="btn btn-danger" formaction="frmites.php" onclick="Enviar('Exc')" name="btoexcluir">Excluir</button>
            </div>
            </div>
        </form>       
    </div>

    



    <script src="js/bootstrap.js"></script>
</body>

</html>
