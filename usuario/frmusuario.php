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
            $mensagem="";
            $id="";
            $nome="";
            $login="";
            $senha="";
            $data="";
            $obs="";
            $status="";
            $img="";
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
            <form action="" class="form-control bg-secondary" method="post" enctype="multipart/form-data" onsubmit="return false;"  name="frmusuario" id="frmusuario">                
            <div class="row">
                    <div class="col-sm-3">
                        <p>
                            <input type="number" name="txtid" placeholder="Id" id="txtid" class="form-control" value="<?= $id?>">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            &nbsp;
                        </p>
                        <p>
                            <button class="btn btn-primary" formaction="sistema.php?tela=usuario" name="btoPesquisar "onclick="Enviar('Pes')">&#128269;</button>
                        </p>
                    </div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <p>
                            <input type="date" id="data" class="form-control"value="<?=$data?>">
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <p>
                            <input type="text" name="txtnome" placeholder="Insira o nome completo" id="txtnome" class="form-control" value="<?=$nome?>">
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <P>
                            &nbsp;
                        </P>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <input type="file" name="txtimg" id="txtimg" class="form-control" value="<?=$img?>">
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <p>
                            <input type="text" name="txtlogin" placeholder="Insira seu login" id="txtlogin" class="form-control" value="<?=$login?>">
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <input type="password" name="txtsenha" placeholder="Insira sua senha" id="txtsenha" class="form-control" value="<?=$senha?>">
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <select name="txtstatus" id="txtstatus" class="form-select">
                                <option value="" > -- Status --</option>
                                <option value="ATIVO" <?=($status=='ATIVO')?'Selected':'';?>>Ativo</option>
                                <option value="INATIVO" <?=($status=='INATIVO')?'Selected':'';?>>Inativo</option>
                            </select>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                            <textarea name="txtobs" id="txtobs" rows="5" class="form-control"> <?= $obs ?> </textarea>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-end">
                        <button class="btn btn-success" formaction="frmusuario.php" name="btocadastrar" onclick="Enviar('Cad')"> Cadastrar</button>
                        <button class="btn btn-info" formaction="frmusuario.php" name="btoalterar" onclick="Enviar('Alt')">Alterar</button>
                        <a class=" btn btn-primary" href="frmusuario.php" onclick="Limpar();">Limpar</a>
                        <button class="btn btn-danger" formaction="frmusuario.php" onclick="Enviar('Exc')" name="btoexcluir">Excluir</button>
                    </div>
                </div>
                <input type="text" name="txtacao" id="txtacao" style="display: none;">
            </form>
            <div class="row">
                <div class="col-sm-12">
                    <?= $mensagem ?>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/bootstrap.js"></script>
    <script>

        const id = document.getElementById("txtid");
        const nome = document.getElementById("txtnome");
        const login = document.getElementById("txtlogin");
        const senha = document.getElementById("txtsenha");
        const status = document.getElementById("txtstatus");
        const obs = document.getElementById("txtobs");
        const img = document.getElementById("txtimg");
        const dataCad = document.getElementById("txtdata");
        const acao = document.getElementById("txtacao");
        const caminho = "sistema.php?tela=usuario";
        const formulario = document.getElementById("frmusuario");

        
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