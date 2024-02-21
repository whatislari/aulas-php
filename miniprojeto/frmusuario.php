<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de usuário</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/bootstrap.js"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <hr>
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
                            <input type="number" name="txtid" placeholder="Id" id="txtid" class="form-control" >
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            &nbsp;
                        </p>
                        <p>
                        <button class="btn btn-primary form-control w-25">&#128269;</button>
                        </p>
                    </div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <p>
                            <label for="txtdata">Data</label>
                        </p>
                        <p>
                            <input type="date" class="form-control">
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                        <label for="txtnome">Nome completo</label>
                        </p>
                        <p>
                        <input type="text" name="txtnome" placeholder="Insira o nome completo" id="txtnome" class="form-control" >
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <p>
                            <label for="txtlogin">Login</label>
                        </p>
                        <p>
                        <input type="text" name="txtlogin" placeholder="Insira seu login" id="txtlogin" class="form-control" >
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <label for="txtsenha">Insira sua senha</label>
                        </p>
                        <p>
                            <input type="password" name="txtsenha" placeholder="Insira sua senha" id="txtsenha" class="form-control" >
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <label for="txtstatus">Status</label>
                        </p>
                        <p>
                            <select name="txtstatus" id="txtstatus" class="form-select">
                                <option value="" >-- Status --</option>
                                <option value="ATIVO" >-- ATIVO --</option>
                                <option value="INATIVO" >-- INATIVO --</option>
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
                            <textarea name="txtobs" id="txtobs" rows="5" class="form-control"></textarea>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-end">
                        <button class="btn btn-success" > Cadastrar</button>
                        <button class="btn btn-info" >Alterar</button>
                        <button class="btn btn-dark" >Limpar</button>
                        <button class="btn btn-danger" >Excluir</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>
</html>