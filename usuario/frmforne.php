<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/bootstrap.js"></script>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <hr>
                <h1>Fornecedores</h1>
                <hr>
            </div>
            <form action="" method="post" class="form-control bg-secondary">
                <div class="row">
                    <div class="col-sm-3">
                        <p>
                            &nbsp;
                        </p>
                        <p>
                            <input type="number" name="txtid" placeholder="ID" id="txtid" class="form-control">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            &nbsp;
                        </p>
                        <p>
                        <button class="btn btn-primary form-control w-25" name="btopesquisar" formaction="frmforne.php">&#128269;</button>
                        </p>
                    </div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <p>
                            &nbsp;
                        </p>
                        <p>
                            <input type="date" class="form-control">
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <p>
                            <input type="text" name="txtnome" placeholder="Informe o nome completo" id="txtnome" class="form-control" >
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <input type="text" name="txtcpf" placeholder="Informe CNPJ/CPF" id="txtcpf" class="form-control">
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <input type="date" name="txtnasc" class="form-control">
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <p>
                            <input type="text" name="txtende" placeholder="Informe o Endereço" id="txtende" class="form-control">
                        </p>
                    </div>
                    <div class="col-sm-2">
                        <p>
                            <input type="text" name="txtnum" placeholder="Nº" id="txtnum" class="form-control">
                        </p>
                    </div>
                    <div class="col-sm-5">
                        <p>
                            <input type="text" name="txtcomp" placeholder="Complemento" id="txtcomp" class="form-control">
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <p>
                            <input type="text" name="txtcep" placeholder="CEP" id="txtcep" class="form-control">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <input type="text" name="txtbairro" placeholder="Bairro" id="txtbairro" class="form-control">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <input type="text" name="txtcidade" placeholder="Cidade" id="txtcidade" class="form-control">
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
                            <input type="text" name="txttel1" placeholder="Telefone 1" id="txttel1" class="form-control">
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            &nbsp;
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <select name="txtstatus" id="txtstatus" class="form-select">
                            <option value=""> -- Status -- </option>
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo">Inativo</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                            <textarea name="txtobs" placeholder="Observação" id="txtobs" rows="5" class="form-control"></textarea>
                        </p>
                    </div>
                </div> <div class="row">
                    <div class="col-sm-12 text-end">
                        <button class="btn btn-success" formaction="frmforne.php" name="btocadastrar"> Cadastrar</button>
                        <button class="btn btn-info" formaction="frmforne.php" name="btoalterar">Alterar</button>
                        <a class=" btn btn-primary" href="frmforne.php" >Limpar</a>
                        <button class="btn btn-danger" formaction="frmforne.php" name="btoexcluir">Excluir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>