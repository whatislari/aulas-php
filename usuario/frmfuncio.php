<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php 

        $mensagem = "";
        $id = "";
        $nome = "";
        $nasc = "";
        $data = "";
        $cpf = "";
        $ende = "";
        $num = "";
        $comp = "";
        $cep = "";
        $bairro = "";
        $cidade = "";
        $uf = "";
        $tel1 = "";
        $tel2 = "";
        $obs = "";
        $img = "";
        $status = "";
        
        include_once('funcio_pesq.php');
        include_once('funcio_alte.php');
        include_once('funcio_cadas.php');
        include_once('funcio_exclu.php');
        ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <hr>
                <h1>Cadastro de Funcionários</h1>
                <hr>
            </div>
            <form action="" method="post" class="form-control bg-secondary">
                <div class="row">
                    <div class="col-sm-3">
                        <p>
                            &nbsp;
                        </p>
                        <p>
                            <input type="number" name="txtid" placeholder="ID" id="txtid" class="form-control" value="<?=$id?>">
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
                            &nbsp;
                        </p>
                        <p>
                            <input type="date" class="form-control"value="<?=$data?>">
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <p>
                            <input type="text" name="txtnome" placeholder="Informe o nome completo" id="txtnome" class="form-control" value="<?=$nome?>">
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <input type="text" name="txtcpf" placeholder="Informe CPF" id="txtcpf" class="form-control"value="<?=$cpf?>">
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <input type="date" name="txtnasc" class="form-control"value="<?=$data?>">
                        </p>
                    </div>
                </div>
                <div class="row">
                <div class="col-sm-4">
                    <p>
                        <input type="file" name="txtimg" id="txtimg" class="form-control" value="<?=$img?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <p>
                        <input type="text" name="txtende" placeholder="Informe o Endereço" id="txtende" class="form-control"value="<?=$ende?>">
                    </p>
                </div>
                <div class="col-sm-2">
                    <p>
                        <input type="text" name="txtnum" placeholder="Nº" id="txtnum" class="form-control"value="<?=$num?>">
                    </p>
                </div>
                <div class="col-sm-5">
                    <p>
                        <input type="text" name="txtcomp" placeholder="Complemento" id="txtcomp" class="form-control"value="<?=$comp?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p>
                        <input type="text" name="txtcep" placeholder="CEP" id="txtcep" class="form-control"value="<?=$cep?>">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>
                            <input type="text" name="txtbairro" placeholder="Bairro" id="txtbairro" class="form-control"value="<?=$bairro?>">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <input type="text" name="txtcidade" placeholder="Cidade" id="txtcidade" class="form-control"value="<?=$cidade?>">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <select name="txtuf" id="txtuf" class="form-select">
                                <option value=""> -- UF -- </option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <input type="text" name="txttel1" placeholder="Telefone 1" id="txttel1" class="form-control"value="<?=$tel1?>">
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <input type="text" name="txttel2" placeholder="Telefone 2" id="txttel2" class="form-control"value="<?=$tel2?>">
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <select name="txtstatus" id="txtstatus" class="form-select">
                            <option value=""> -- Status -- </option>
                            <option value="Ativo" <?=($status == 'Ativo')?'selected':''; ?>>Ativo</option>
                            <option value="Inativo" <?=($status == 'Inativo')?'selected':''; ?>>Inativo</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                            <textarea name="txtobs" placeholder="Observação" id="txtobs" rows="5" class="form-control"><?=$obs?></textarea>
                        </p>
                    </div>
                </div> <div class="row">
                    <div class="col-sm-12 text-end">
                        <button class="btn btn-success" formaction="frmfuncio.php" name="btocadastrar" onclick="Enviar('Cad')"> Cadastrar</button>
                        <button class="btn btn-info" formaction="frmfuncio.php" name="btoalterar" onclick="Enviar('Alt')">Alterar</button>
                        <a href="sistema.php?tela=funcio" class="btn btn-dark">Limpar</a>
                        <button class="btn btn-danger" formaction="frmfuncio.php" name="btoexcluir" onclick="Enviar('Exc')">Excluir</button>
                    </div>
                </div>
                <input type="text" name="txtacao" id="txtacao" style="display: none;">
            </form>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script>
        const id = document.getElementById("txtid");
        const nome = document.getElementById("txtnome");
        const nasc = document.getElementById("txtnasc");
        const dataCad = document.getElementById("txtdata");
        const cpf = document.getElementById("txtcpf");
        const ende = document.getElementById("txtende");
        const num = document.getElementById("txtnum");
        const comp = document.getElementById("txtcomp");
        const cep = document.getElementById("txtcep");
        const bairro = document.getElementById("txtbairro");
        const cidade = document.getElementById("txtcidade");
        const uf = document.getElementById("txtuf");
        const tel1 = document.getElementById("txttel1");
        const tel2 = document.getElementById("txttel2");
        const obs = document.getElementById("txtobs");
        const status = document.getElementById("txtstatus");
        const img = document.getElementById("txtimg");
        const acao = document.getElementById("txtacao");
        const caminho = "sistema.php?tela=funcio";
        const formulario = document.getElementById("frmufuncio");

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