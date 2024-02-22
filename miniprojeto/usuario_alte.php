<?php   

    include_once('conn.php');

    if($_POST)
    {
        try 
        {
            $sql = $conn ->prepare('
            update usuario set
            nome_usuario=:nome_usuario,
            login_usuario=:login_usuario,
            senha_usuario=:senha_usuario,
            obs_usuario=:obs_usuario,
            status_usuario=:status_usuario

            where id_usuario=:id_usuario
            ');

            $sql -> execute(array(

            ':nome_usuario'=> $_POST['txtnome'],
            ':login_usuario'=> $_POST['txtlogin'],
            ':senha_usuario'=> $_POST['txtsenha'],
            ':obs_usuario'=> $_POST['txtobs'],
            ':status_usuario'=> $_POST['txtstatus'],
            ':id_usuario'=> $_POST['txtid']

            ));

            if($sql->rowCount() > 0)
            {
                $mensagem = '<p>Dados alterados com sucesso</p>';
            }
        }
        catch(PDOException $error)
        {
            echo "". $error->getMessage();
        }   
    }
    
    