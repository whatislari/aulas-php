<?php
if($_POST)
{
if($_POST['txtacao']=='Alterar')
{
    include_once('conn.php');

    if($_FILES['txtimg']['name']!="")
    {
        $arquivo = $_FILES['txtimg'];

        try 
        {
            $sql = $conn->prepare('
            update produto set
                nome_produto=:nome_produto,
                qtde_produto=:qtde_produto,
                Vcusto_produto=:Vcusto_produto,
                Vvenda_produto=:Vvenda_produto,
                obs_produto=:obs_produto,
                img_produto=:img_produto
                status_produto=:status_produto,

                where id_produto=:id_produto
            ');
            $sql->execute(array(
                ':id_produto'=>$_POST['txtid'],
                ':nome_usuario'=>$_POST['txtnome'],
                ':qtde_produto'=>$_POST['txtqtde'],
                ':Vcusto_produto'=>$_POST['txtVcusto'],
                ':Vvenda_produto'=>$_POST['txtVvenda'],
                ':obs_usuario'=>$_POST['txtobs'],
                ':status_usuario'=>$_POST['txtstatus'],
                ':img_usuario'=>$arquivo['name']
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
            update produto set
                nome_produto=:nome_produto,
                qtde_produto=:qtde_produto,
                Vcusto_produto=:Vcusto_produto,
                Vvenda_produto=:Vvenda_produto,
                obs_produto=:obs_produto,
                img_produto=:img_produto
                status_produto=:status_produto,
                
                where id_produto=:id_produto
            ');
            $sql->execute(array(
                ':id_produto'=>$_POST['txtid'],
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
                $mensagem = '<p>Dados alterados com sucesso</p>';
            }
        }
        catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
}
}


?>
