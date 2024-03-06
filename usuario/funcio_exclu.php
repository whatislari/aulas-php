<?php

    if(isset($_POST['btoexcluir']))
    {

        try 
        {
            include_once('conn.php');
    
            $sql = $conn ->prepare('
            delete from funcionario where id_funcionario=:id_funcionario
            ');

            $sql -> execute(array(

            ':id_funcionario'=> $_POST['txtid']

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