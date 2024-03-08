<?php
if($_POST)
{
if($_POST['txtacao']=='Cadastrar')
{

    include_once('conn.php');

    $arquivo = $_FILES['txtimg'];

    try 
    {
        $sql = $conn->prepare('
        insert into produto
            (nome_produto,qtde_produto,Vcusto_produto,Vvenda_produto,obs_produto,img_produto)
            values(:nome_produto,:qtde_produto,:Vcusto_produto,:Vvenda_produto,:obs_produto,:img_produto)
        ');

        $sql->execute(array(
            ':nome_produto'=>$_POST['txtnome'],
            ':qtde_produto'=>$_POST['txtqtde'],
            ':Vcusto_produto'=>$_POST['txtVcusto'],
            ':Vvenda_produto'=>$_POST['txtVvenda'],
            ':obs_produto'=>$_POST['txtobs'],
            ':status_produto'=>$_POST['txtstatus'],
            ':img_produto'=>$arquivo['name']
        ));


        if($sql->rowCount() > 0)
        {
            $mensagem = '<p>Cadastro realizado com sucesso</p> - '.$sql->rowCount();
            $mensagem = $mensagem.'<p>ID Gerado:'.$conn->lastInsertId().'</p>';

            $pasta = 'imagens/'.$conn->lastInsertId().'/';
            
            if(!file_exists($pasta))
            {
                mkdir($pasta);
            }

            $foto = $pasta.$arquivo['name'];

            move_uploaded_file($arquivo['tmp_name'],$foto);

            header("Location:sistema.php?tela=produto&IDUsuario=".$conn->lastInsertId());
        }
    } 
    catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}
}

