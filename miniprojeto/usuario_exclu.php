<?php

    if(isset($_POST['btoexcluir']))
    {

        try 
        {
            include_once('conn.php');
    
            $sql = $conn ->prepare('
            delete from usuario where id_usuario=:id_usuario
            ');

            $sql -> execute(array(

            ':id_usuario'=> $_POST['txtid']

            ));

            if($sql->rowCount() > 0)
            {
                $mensagem = '<p>Cadastro excluido com sucesso</p>';
            }
        }
        catch(PDOException $error)
        {
            echo "". $error->getMessage();
        }   
    }   