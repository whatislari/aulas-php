<?php


if($_POST or $_GET)
{
if(isset($_POST['txtacao']) or isset($_GET['IDUsuario']))
{

    include_once('conn.php');

    $idUsuario="";
    
    if(isset($_POST['txtacao']))
    {
        if($_POST['txtacao']=='Pesquisar')
        {
            $idUsuario=$_POST['txtid'];
        }
        else
        {
            return;
        }
    }
    elseif(isset($_GET['IDUsuario']))
    {        
        $idUsuario=$_GET['IDUsuario'];
    }

    try
    {
        

        $sql = $conn->query('select * from funcionario where id_funcionario='.$idUsuario);

        if($sql->rowCount()>0)
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
                $img = $linha[14];
                $obs = $linha[15];
                $status = $linha[16];
            }
        }else{
            echo '<script>alert("Usuário não encontrado")</script>';
            $mensagem = "Funcionario não encontado";
        }
        
    }
    catch(PDOException $erro)
    {
        echo $erro->getMessage();
    }   
}
}
?>
