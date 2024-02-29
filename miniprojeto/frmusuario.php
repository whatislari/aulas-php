<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuario</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/bootstrap.js"></script>

</head>
<body>
        <?php 
            $mensagem="";
            include_once('usuario_pesq.php');
            include_once('usuario_cadas.php');
            include_once('usuario_alte.php');
            include_once('usuario_exclu.php');
        ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center p-5">
                
                <h1>Formulário de usuarios</h1>
                <hr>
            </div>
            <form action="" method="post" class="form-control bg-secondary">
                <div class="row">
                    <div class="col-sm-3">
                        <p>
                            <label for="txtid">Id</label>
                        </p>
                        <p>
                            <input type="number" name="txtid" placeholder="Id" id="txtid" class="form-control" value="<?=$id?>">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            &nbsp;
                        </p>
                        <p>
                        <button class="btn btn-primary form-control w-25" name="btopesquisar" formaction="usuario_pesq.php">&#128269;</button>
                        </p>
                    </div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <p>
                            <label for="txtdata">Data</label>
                        </p>
                        <p>
                            <input type="date" class="form-control"value="<?=$data?>">
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                        <label for="txtnome">Nome completo</label>
                        </p>
                        <p>
                        <input type="text" name="txtnome" placeholder="Insira o nome completo" id="txtnome" class="form-control" value="<?=$nome?>">
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <p>
                            <label for="txtlogin">Login</label>
                        </p>
                        <p>
                        <input type="text" name="txtlogin" placeholder="Insira seu login" id="txtlogin" class="form-control" value="<?=$login?>">
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <label for="txtsenha">Insira sua senha</label>
                        </p>
                        <p>
                            <input type="password" name="txtsenha" placeholder="Insira sua senha" id="txtsenha" class="form-control" value="<?=$senha?>">
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <label for="txtstatus">Status</label>
                        </p>
                        <p>
                            <select name="txtstatus" id="txtstatus" class="form-select">
                                <option value="" >-- Status --</option>
                                <option value="ATIVO" <?=($status=='ATIVO')?'Selected':'';?>>Ativo</option>
                                <option value="INATIVO" <?=($status=='INATIVO')?'Selected':'';?>>Inativo</option>
                            </select>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                            <label for="txtobs">Observações</label>
                        </p>
                        <p>
                            <textarea name="txtobs" id="txtobs" rows="5" class="form-control"><?=$obs?></textarea>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-end">
                        <button class="btn btn-success" formaction="frmusuario.php" name="btocadastrar"> Cadastrar</button>
                        <button class="btn btn-info" formaction="frmusuario.php" name="btoalterar">Alterar</button>
                        <a class=" btn btn-primary" href="frmusuario.php">Limpar</a>
                        <button class="btn btn-danger" formaction="frmusuario.php" name="btoexcluir">Excluir</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-sm-12">
                    <?= $mensagem ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>