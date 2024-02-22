<?php   

    include_once('conn.php');

    if(isset($_POST['btocadastrar']))
    {

        $sql = $conn ->prepare('
        insert into usuario
            (nome_usuario,login_usuario,senha_usuario,obs_usuario)
        values
            (:nome_usuario,:login_usuario,:senha_usuario,:obs_usuario) 
            
        ');

        $sql -> execute(array(

            ':nome_usuario'=> $_POST['txtnome'],
            ':login_usuario'=> $_POST['txtlogin'],
            ':senha_usuario'=> $_POST['txtsenha'],
            ':obs_usuario'=> $_POST['txtobs']

        ));

        if($sql->rowCount() > 0)
        {
            $mensagem = '<p>Cadastro realizado com sucesso</p> - '.$sql->rowCount();
            $mensagem = $mensagem.'<p>ID Gerado:'.$conn->lastInsertId().'</p>';
        }
    }