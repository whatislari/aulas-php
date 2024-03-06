<?php
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
$status = "";

if(isset($_POST['btopesquisar']))
{
    include_once('conn.php');

    try
    {
        $txtid = $_POST['txtid'];

        // Verificar se o ID é um número válido
        if(!is_numeric($txtid)) {
            throw new Exception("ID inválido. O ID deve ser um número.");
        }

        // Preparar a consulta SQL usando prepared statements para evitar SQL injection
        $sql = $conn->prepare('SELECT * FROM funcionario WHERE id_funcionario = :id');
        $sql->bindParam(':id', $txtid);
        $sql->execute();

        // Verificar se a consulta foi bem sucedida
        if($sql->rowCount() > 0)
        {
            foreach($sql as $linha)
            {
                $id = $linha[0];
                $nome = $linha[1];
                $nasc = $linha[2];
                $data = $linha[3];
                $data = substr($data, 0, 10);
                $cpf = $linha[4];
                $ende = $linha[5];
                $num = $linha[6];
                $comp = $linha[7];
                $cep = $linha[8];
                $bairro = $linha[9];
                $cidade = $linha[10];
                $uf = $linha[11];
                $tel1 = $linha[12];
                $tel2 = $linha[13];
                $obs = $linha[14];
                $status = $linha[15];
            }
        } else {
            // Se o funcionário não for encontrado, exibir uma mensagem
            echo '<script>alert("Funcionário não encontrado")</script>';
            $mensagem = "Funcionário não encontrado";
        }
    } catch(Exception $e) {
        // Exibir mensagem de erro
        echo "Erro: " . $e->getMessage();
    }   
}
?>
