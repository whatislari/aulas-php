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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-control p-3" id="txtNotas">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Sistema de mercado</h2>
            </div>
            <hr>
            <div class="col-sm-6">
                <select name="produto" class="form-select" aria-label="Default select example">
                    <option selected>Produtos</option>
                    <option value="Banana">Banana</option>
                    <option value="Maçã">Maçã</option>
                    <option value="Uva">Uva</option>
                    <option value="Pêra">Pêra</option>
                </select>
            </div>
            <div class="col-sm-6">
                <p><input type="text" placeholder="Valor Unitário" name="valor" id="valor" class="form-control"></p>
            </div>
            <div class="col-sm-6">
                <p><input type="number" placeholder="Quantidade" name="quantidade" id="quantidade" class="form-control" max="10" min="1"></p>
            </div>
            <div class="col-sm-6">
                <select name="pagamento" class="form-select" aria-label="Default select example">
                    <option value="">-- Tipo de pagamento --</option>
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
        <?php
        // Verifica se o formulário foi submetido e exibe as informações se necessário
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btoCalcular"])) {
            // Obtém os valores do formulário
            $produto = $_POST['produto'];
            $valor = $_POST['valor'];
            $quantidade = $_POST['quantidade'];
            $pagamento = $_POST['pagamento'];

            // Calcula o subtotal
            $subtotal = $valor * $quantidade;

            // Inicializa as variáveis para desconto e juros
            $desconto = 0;
            $juros = 0;

            // Calcula o desconto/juros com base no método de pagamento
            switch ($pagamento) {
                case "din":
                    // Desconto de 10% para pagamento em dinheiro
                    $desconto = $subtotal * 0.1;
                    break;
                case "px":
                    // Desconto de 5% para pagamento em pix
                    $desconto = $subtotal * 0.05;
                    break;
                case "cc":
                    // Desconto de 8% para pagamento em cartão de crédito
                    $desconto = $subtotal * 0.08;
                    break;
                case "bo":
                    // Juros de 10% para pagamento em boleto
                    $juros = $subtotal * 0.1;
                    break;
                // Para outros métodos de pagamento, não há desconto/juros
                default:
                    break;
            }

            // Calcula o total com desconto/juros
            $total = $subtotal - $desconto + $juros;

            // Exibe o resultado formatado na tela
            echo "<div class='col-sm-12 text-center'>";
            echo "<h4>Produto: $produto</h4>";
            echo "<h4>Valor: R$ " . number_format($valor, 2, ',', '.') . "</h4>";
            echo "<h4>Quantidade: $quantidade</h4>";
            echo "<h4>Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . "</h4>";
            echo "<h4>Desconto: R$ " . number_format($desconto, 2, ',', '.') . "</h4>";
            echo "<h4>Juros: R$ " . number_format($juros, 2, ',', '.') . "</h4>";
            echo "<h4>Total: R$ " . number_format($total, 2, ',', '.') . "</h4>";
            echo "</div>";
        }
        ?>
        <div class="col-sm-12 text-center mt-3"> <!-- Adicionado -->
            <button type="submit" class="btn btn-primary" name="btoCalcular">Ok</button> <!-- Botão Ok -->
        </div> <!-- Adicionado -->
    </form>
</div>

<script src="js/bootstrap.js"></script>

</body>
</html>
