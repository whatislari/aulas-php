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
            update usuario set
                nome_usuario=:nome_usuario,
                login_usuario=:login_usuario,
                senha_usuario=:senha_usuario,
                obs_usuario=:obs_usuario,
                status_usuario=:status_usuario,
                img_usuario=:img_usuario
                where id_usuario=:id_usuario
            ');
            $sql->execute(array(
                ':id_usuario'=>$_POST['txtid'],
                ':nome_usuario'=>$_POST['txtnome'],
                ':login_usuario'=>$_POST['txtlogin'],
                ':senha_usuario'=>$_POST['txtsenha'],
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
            update usuario set
                nome_usuario=:nome_usuario,
                login_usuario=:login_usuario,
                senha_usuario=:senha_usuario,
                obs_usuario=:obs_usuario,
                status_usuario=:status_usuario
                where id_usuario=:id_usuario
            ');
            $sql->execute(array(
                ':id_usuario'=>$_POST['txtid'],
                ':nome_usuario'=>$_POST['txtnome'],
                ':login_usuario'=>$_POST['txtlogin'],
                ':senha_usuario'=>$_POST['txtsenha'],
                ':obs_usuario'=>$_POST['txtobs'],
                ':status_usuario'=>$_POST['txtstatus']
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