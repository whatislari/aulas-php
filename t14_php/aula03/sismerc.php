<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div class="container p-5 bg-secondary">
    <form action="" method="post" class="form-control p-3" id="txtNotas">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Sistema de mercado</h2>
            </div>
            <hr>
            <div class="col-sm-6">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Produtos</option>
                    <option value="1">Banana</option>
                    <option value="2">Maça</option>
                    <option value="3">Uva</option>
                    <option value="3">Pêra</option>
                  </select>
            </div>
            <div class="col-sm-6">
                <p><input type="text" placeholder="Valor Unitário" name="txtvu" id="txtvu" class="form-control"></p>
            </div>
            <div class="col-sm-6">
                <p><input type="number" placeholder="Quantidade" name="txtqtde" id="txtqtde" class="form-control" max="10" min="1"></p>
            </div>
            <div class="col-sm-6">
                <select class="form-select" aria-label="Default select example">
                    <option value="" >-- Tipo de pagamento --</option>
                    <option value="din">Dinheiro</option>
                    <option value="px">Pix</option>
                    <option value="cd">Cartão de Débito</option>
                    <option value="cc">Cartão de Crédito</option>
                    <option value="bo">Boleto</option>
                  </select>
            </div>
        </div>
        <hr>
        <div class="col-sm-12 text-center">
            <h4>Informações da compra</h4>
        </div>
    </form>
</div>

<script src="js/bootstrap.js"></script>

</body>
</html>