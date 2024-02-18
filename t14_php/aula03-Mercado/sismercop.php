<?php
// Verifica se o formulário foi enviado e se o método de pagamento foi definido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pagamento"])) {
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
