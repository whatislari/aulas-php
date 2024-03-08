<?php
if($_POST)
{
if($_POST['txtAcao']=='Alterar')
{
    include_once('conn.php');

    if($_FILES['txtimg']['name']!="")
    {
        $arquivo = $_FILES['txtimg'];

        try 
        {
            $sql = $conn->prepare('
            UPDATE funcionario SET

            nome_funcionario = :nome_funcionario,
            nasc_funcionario = :nasc_funcionario,
            cpf_funcionario = :cpf_funcionario,
            logradouro_funcionario = :logradouro_funcionario,
            numero_funcionario = :numero_funcionario,
            comp_funcionario = :comp_funcionario,
            cep_funcionario = :cep_funcionario,
            bairro_funcionario = :bairro_funcionario,
            cidade_funcionario = :cidade_funcionario,
            uf_funcionario = :uf_funcionario,
            telefone1_funcionario = :telefone1_funcionario,
            telefone2_funcionario = :telefone2_funcionario,
	        img_funcionario=:img_funcionario,
            obs_funcionario = :obs_funcionario,
            status_funcionario = :status_funcionario
            
            WHERE id_funcionario = :id_funcionario
        ');
        $sql->execute(array(
            ':id_funcionario' => $_POST['txtid'],
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
            ':img_funcionario' => $_POST['txttimg'],
            ':obs_funcionario' => $_POST['txtobs'],
            ':status_funcionario' => $_POST['txtstatus']
        ));
            if($sql->rowCount() > 0)
            {
                $mensagem = '<p>Dados alterados com sucesso</p>';

                $pasta = 'imagens/'.$_POST['txtid'].'/';
                
                if(!file_exists($pasta))
                {
                    mkdir($pasta);
                }

                $foto = $pasta.$arquivo['name'];

                move_uploaded_file($arquivo['tmp_name'],$foto);
            }
        }
        catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
    else
    {
        try 
        {
            $sql = $conn->prepare('
            UPDATE funcionario SET

            nome_funcionario = :nome_funcionario,
            nasc_funcionario = :nasc_funcionario,
            cpf_funcionario = :cpf_funcionario,
            logradouro_funcionario = :logradouro_funcionario,
            numero_funcionario = :numero_funcionario,
            comp_funcionario = :comp_funcionario,
            cep_funcionario = :cep_funcionario,
            bairro_funcionario = :bairro_funcionario,
            cidade_funcionario = :cidade_funcionario,
            uf_funcionario = :uf_funcionario,
            telefone1_funcionario = :telefone1_funcionario,
            telefone2_funcionario = :telefone2_funcionario,
            obs_funcionario = :obs_funcionario,
            status_funcionario = :status_funcionario
            
            WHERE id_funcionario = :id_funcionario
            ');
            $sql->execute(array(
            ':id_funcionario' => $_POST['txtid'],
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
            ':status_funcionario' => $_POST['txtstatus']
            ));
            if($sql->rowCount() > 0)
            {
                $mensagem = '<p>Dados alterados com sucesso</p>';
            }
        }
        catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
}
}
