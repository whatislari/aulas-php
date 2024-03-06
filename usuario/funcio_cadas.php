<?php

include_once('conn.php');

if(isset($_POST['btocadastrar']))
{
    try {  
        if(empty($_POST['txtcpf'])) 
        {
            echo "O CPF é obrigatório.";
        } 
        else
        {
            $sql = $conn->prepare('
            insert into funcionario
            (nome_funcionario,
            nasc_funcionario,
            cpf_funcionario,
            logradouro_funcionario,
            numero_funcionario,
            comp_funcionario,
            cep_funcionario,
            bairro_funcionario,
            cidade_funcionario,
            uf_funcionario,
            telefone1_funcionario,
            telefone2_funcionario,
            obs_funcionario,
            status_funcionario) 

            values

            (:nome_funcionario,
            :nasc_funcionario,
            :cpf_funcionario,
            :logradouro_funcionario,
            :numero_funcionario,
            :comp_funcionario,
            :cep_funcionario,
            :bairro_funcionario,
            :cidade_funcionario,
            :uf_funcionario,
            :telefone1_funcionario,
            :telefone2_funcionario,
            :obs_funcionario,
            :status_funcionario)
            ');
            
            $sql->execute(array(
                ':nome_funcionario' => $_POST['txtnome'],
                ':nasc_funcionario' => $_POST['txtnasc'],
                ':cpf_funcionario' => $_POST['txtcpf'],
                ':logradouro_funcionario' => $_POST['txtende'],
                ':numero_funcionario' => $_POST['txtnum'],
                ':comp_funcionario' => $_POST['txtcomp'],
                ':cep_funcionario' => $_POST['txtcep'],
                ':bairro_funcionario' => $_POST['txtbairro'],
                ':cidade_funcionario' => $_POST['txtcidade'],
                ':uf_funcionario' => $_POST['txtuf'],
                ':telefone1_funcionario' => $_POST['txttel1'],
                ':telefone2_funcionario' => $_POST['txttel2'],
                ':obs_funcionario' => $_POST['txtobs'],
                ':status_funcionario'=> $_POST['txtstatus'],
            ));

            if($sql->rowCount() > 0)
            {
                $mensagem = '<p>Cadastro realizado com sucesso</p> - '.$sql->rowCount();
                $mensagem = $mensagem.'<p>ID Gerado:'.$conn->lastInsertId().'</p>';
            }
        }
    } 
    catch(PDOException $error) 
    {
        echo "". $error->getMessage();
    }
}
?>
