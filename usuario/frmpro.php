<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php 
            $mensagem="";
            $txtid="";
            $txtnome="";
            $txtqtde="";
            $txtVcusto="";
            $txtVvenda="";
            $txtstatus="";
            $txtobs="";
            $img="";
            include_once('pro_cadas.php');
            include_once('pro_alte.php');
            include_once('pro_exclu.php');
            include_once('pro_pesq.php');
            ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center p-5">
                <h1>Cadastramento de produtos</h1>
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
                                <button class="btn btn-primary form-control w-25" name="btoPesquisar" onclick="Enviar('Pes')">&#128269;</button>
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
                                <input type="text" name="txtnome" id= "txtnome" class="form-control w-30"placeholder="Insira aqui o produto" value="<?= $nome ?>">
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <p>
                                &nbsp;
                            </p> 
                        </div>
                        <div class="col-sm-4">
                        <p>
                            <input type="file" name="txtimg" id="txtimg" class="form-control" value="<?=$img?>">
                        </p>
                    </div>
                        <div class="col-sm-4">
                            <p>
                                <input type="number" name="txtqtde" id= "txtqtde" class="form-control w-30"placeholder="Quantidade"value="<?= $qtde ?>">
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p>
                                <input type="number" name="txtVcusto" id= "txtVcusto" class="form-control w-30"placeholder="Valor de venda"value="<?= $vvenda ?>">
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <p>
                                &nbsp;
                            </p> 
                        </div>
                        <div class="col-sm-4">
                            <p>
                                <input type="number" name="txtVvenda" id= "txtVvenda" class="form-control w-30"placeholder="Valor de custo"value="<?= $vvenda ?>">
                            </p>
                        </div>
                    </div>
                    <div class="row">
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
                            <button class="btn btn-success" formaction="frmpro.php" name="btocadastrar" onclick="Enviar('Cad')"> Cadastrar</button>
                            <button class="btn btn-info" formaction="frmpro.php" name="btoalterar" onclick="Enviar('Alt')">Alterar</button>
                            <a class=" btn btn-primary" href="frmpro.php">Limpar</a>
                            <button class="btn btn-danger" formaction="frmpro.php" name="btoexcluir" onclick="Enviar('Exc')">Excluir</button>
                        </div>
                    </div>
                </div>
                <input type="text" name="txtacao" id="txtacao" style="display: none;">
            </form>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <?= $mensagem ?>
                </div>
            </div>
        </div>
    </div>    
    <script src="js/bootstrap.js"></script>
    <script>

        const id = document.getElementById("txtid");
        const nome = document.getElementById("txtnome");
        const qtde = document.getElementById("txtqtde");
        const Vcusto = document.getElementById("txtVcusto");
        const Vvenda = document.getElementById("txtVvenda");
        const status = document.getElementById("txtstatus");
        const obs = document.getElementById("txtobs");
        const img = document.getElementById("txtimg");
        const dataCad = document.getElementById("txtdata");
        const acao = document.getElementById("txtacao");
        const caminho = "sistema.php?tela=produto";


        function Enviar(tipo)
        {
            console.log(tipo);

            if(tipo == "pes")
            {
                acao.value='Pesquisar'

                if(id.value=="")
                {
                    alert ("Valor do ID deve ser preenchido")
                    id.focus()
                    return;
                }

                formulario.action=caminho
                formulario.submit()
            }

            if(tipo == "Exc")
            {
                acao.value='Excluir'

                if(id.value=="")
                {
                    alert ("Valor do ID deve ser preenchido")
                    id.focus()
                    return;
                }

                formulario.action=caminho
                formulario.submit()
            }

            if(tipo == "Alt")
            {
                acao.value='Alterar'

                if(id.value=="")
                {
                    alert ("Valor do ID deve ser preenchido")
                    id.focus()
                    return;
                }

                formulario.action=caminho
                formulario.submit()
            }

            if(tipo == "Cad")
            {
                acao.value='Cadastrar'

                if(nome.value=="")
                {
                    alert ("Valor do Nome deve ser preenchido")
                    nome.focus()
                    return;
                }

                formulario.action=caminho
                formulario.submit()
            }
            console.log(acao.value)
        }
    </script>   
</body>
</html>