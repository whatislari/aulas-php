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
        insert into usuario
            (nome_usuario,login_usuario,senha_usuario,obs_usuario,img_usuario)
            values(:nome_usuario,:login_usuario,:senha_usuario,:obs_usuario,:img_usuario)
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
            $mensagem = '<p>Cadastro realizado com sucesso</p> - '.$sql->rowCount();
            $mensagem = $mensagem.'<p>ID Gerado:'.$conn->lastInsertId().'</p>';

            $pasta = 'imagens/'.$conn->lastInsertId().'/';
            
            if(!file_exists($pasta))
            {
                mkdir($pasta);
            }

            $foto = $pasta.$arquivo['name'];

            move_uploaded_file($arquivo['tmp_name'],$foto);

            header("Location:sistema.php?tela=usuario&IDUsuario=".$conn->lastInsertId());
        }
    } 
    catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}
}

